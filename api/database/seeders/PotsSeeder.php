<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Post 1',
            'slug' => 'post-1',
            'content' => 'conten post 1'
        ]);
        Post::create([
            'title' => 'Post 2',
            'slug' => 'post-2',
            'content' => 'conten post 2'
        ]);
    }
}
