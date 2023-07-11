<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i=0; $i < 15; $i++) { 
            $newProject = new Project();
            $newProject->title = $faker->text(50);
            $newProject->content = $faker->text();
            $newProject->image = $faker->imageUrl();
            $newProject->type_id = $faker->numberBetween(0, 5);
            $newProject->save();
        }

    }
}
