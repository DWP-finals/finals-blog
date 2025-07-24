<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(Request $request) 
    {
        $user = Auth::user();

        if (!$user) {
            abort(403, 'Unauthorized');
        }
        
        $posts = $user->contributedPosts()->latest()->get();
        return view('newdashboard', compact('posts'));
    }
} 
