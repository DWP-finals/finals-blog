<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Coffee', 'Tea', 'Kombucha', 'Chai',
            'Dirty Tea', 'Irish Coffee', 'Lemong Grass', 'Jasmine Tea',
        ];

        foreach ($tags as $tag) {
            Tag::firstOrCreate(['tag_name' => $tag]);
        }
    }
}
