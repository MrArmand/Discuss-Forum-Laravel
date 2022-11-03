<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Hard code one post
        $n = new Post;
        $n->content = "amogus";
        $n->person_id = 1;
        $n->save();

        Post::factory()->count(50)->create();
    }
}
