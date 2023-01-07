<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

   

    public function run()
    {
        //Create one hardcoded person
        $p = new User;
        $p->name = "Armand";
        $p->email = "me@gmail.com";
        $p->password = "itsmemario";
        $p->role = "1";
        $p->save();

        //Number of users
        $n = 2;
        
        for ($i=0; $i < $n; $i++){
        User::factory()->has(Post::factory()->count(fake()->numberBetween(1,3)))->create();
        }
    }
}
