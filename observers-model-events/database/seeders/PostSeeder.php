<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = collect([
            [
                'title' => 'News Title One',
                'slug' => 'news-title-one',
                'description' => 'This Post is the First Post.',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Title Two',
                'slug' => 'news-title-two',
                'description' => 'This Post is the Second Post.',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'News Title Three',
                'slug' => 'news-title-three',
                'description' => 'This post is the third post.',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Title Four',
                'slug' => 'news-title-four',
                'description' => 'This post is the Fourth Post.',
                'user_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Title Five',
                'slug' => 'news-title-five',
                'description' => 'This post is the Fifth Post.',
                'user_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Title Six',
                'slug' => 'news-title-six',
                'description' => 'This post is the Six Post.',
                'user_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Title Seven',
                'slug' => 'news-title-seven',
                'description' => 'This post is the Seven Post.',
                'user_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Title Eight',
                'slug' => 'news-title-eight',
                'description' => 'This post is the Eight Post.',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Title Nine',
                'slug' => 'news-title-nine',
                'description' => 'This post is the Nineth Post.',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        $posts->each(function($post){
            Post::insert($post);
        });
    }
}
