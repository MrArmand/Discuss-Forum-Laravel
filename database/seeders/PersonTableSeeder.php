<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

   

    public function run()
    {
        //Create one hardcoded person
        $p = new Person;
        $p->name = "Armand";
        $p->surname = "Dorosz";
        $p->save();

        //Number of people
        $n = 50;
        
        for ($i=0; $i < $n; $i++){
        Person::factory()->has(Post::factory()->count(fake()->numberBetween(1,3)))->create();
        }
    }
}
