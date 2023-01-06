<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Hard code one comment
        $c = new Comment;
        $c->content = "TESTING";
        $c->user_id = 1;
        $c->post_id = 2;
        $c->save();
    }
}
