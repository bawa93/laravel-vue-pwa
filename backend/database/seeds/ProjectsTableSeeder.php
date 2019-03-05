<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'title' => 'Mr-Jatt.Com',
                'info' => 'Music Download Website with high automation and ease to use'
            ],
            [
                'title' => 'LocateMyArea',
                'info' => 'The international platform where users can look for the properties for sell or rent within their area'
            ],
            [
                'title' => 'FilmyWap',
                'info' => 'Free Open sourced movies download website'
            ],
            [
                'title' => 'Apunjab.Com',
                'info' => 'Fun posts regarding politics, daily life, animals , and othe things'
            ],
            [
                'title' => 'VowTech',
                'info' => 'Mock Turtle persisted. \'How COULD he turn them out of sight, he said to Alice. \'Only a thimble,\' said Alice in a twinkling! Half-past one, time for dinner!\' (\'I only wish it was,\' the March Hare.'
            ]
        ];

        $faker = Faker\Factory::create();
        foreach ($projects as $project) {
            $prj = new \App\Project();
            $prj->title = $project['title'];
            $prj->info = $project['info'];
            $prj->image = $faker->imageUrl();

            $prj->save();
        }
    }
}
