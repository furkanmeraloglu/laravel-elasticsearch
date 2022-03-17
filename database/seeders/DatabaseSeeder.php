<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Category::factory(5)->create();
        Post::factory(30)->create();
        Comment::factory(50)->create();
        Tag::factory(100)->create();

        foreach (Post::all() as $post) {
            $post->tags()->attach(
                Tag::inRandomOrder()->take(rand(2,4))->pluck('id')
            );
        }

        foreach (Comment::all() as $comment) {
            $comment->tags()->attach(
                Tag::inRandomOrder()->take(rand(1,3))->pluck('id')
            );
        }

    }
}
