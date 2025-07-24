<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function store(Request $request)
    {
        Log::info('store method hit');

        $request->merge([
            'contributors' => is_string($request->input('contributors'))
                ? json_decode($request->input('contributors'), true) ?? []
                : $request->input('contributors'),

            'tags' => is_string($request->input('tags'))
                ? json_decode($request->input('tags'), true) ?? []
                : $request->input('tags'),
        ]);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'contributors' => 'nullable|array',
            'tags' => 'nullable|array',
            'image' => 'nullable|image|max:2048'
        ]);

        Log::info('Saving post...');

        $imageData = null;
        if ($request->hasFile('image')) {
            $imageData = file_get_contents($request->file('image')->getRealPath());
        }

        $status = $request->input('status', 'draft');
        $publishedDate = $status === 'published' ? now() : null;

        $post = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image_data' => $imageData,
            'status' => $status,
            'published_date' => $publishedDate,
        ]);

        Log::info('Post model after creation:', $post->toArray());

        if (!$post->exists) {
            Log::error('Post failed to save.');
        } else {
            Log::info('Post created with ID: ' . $post->id);
        }

        foreach ($request->input('contributors') as $userId) {
            $post->contributors()->attach($userId, ['author_role' => 'co-author']);
        }

        $tagIds = [];
        foreach ($request->input('tags') as $tagName) {
            $tag = Tag::firstOrCreate(['tag_name' => $tagName]);
            $tagIds[] = $tag->id;
        }
        $post->tags()->sync($tagIds);

        return redirect('/newdashboard')->with('success', 'Post created successfully!');
    }

    public function drafts() {
        $drafts = Post::where('status', 'draft')->latest()->get();
        return view('posts.drafts', compact('drafts'));
    }
}
