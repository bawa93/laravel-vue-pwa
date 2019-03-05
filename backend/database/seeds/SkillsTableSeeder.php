<?php

use App\Skill;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            [
                'title' => 'PHP',
                'info'  => 'PHP: Hypertext Preprocessor is a server-side scripting language designed for web development.'
                ,'stack_type' => 'Backend'
            ], [
                'title'=> 'Javascript',
                'info' => 'JavaScript, often abbreviated as JS, is a high-level, interpreted programming language that conforms to the ECMAScript specification.'
                ,'stack_type' => 'Frontend'
            ],
            [
                'title' => 'NodeJs',
                'info'  => 'Node.js is an open-source, cross-platform JavaScript run-time environment that executes JavaScript code outside of a browser.'
                ,'stack_type' => 'Backend'
            ],
            [
                'title' => 'Laravel',
                'info'  => 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications'
                ,'stack_type' => 'Backend'
            ],
            [
                'title' => 'MySQL',
                'info'  => 'MySQL is an open source relational database management system. Its name is a combination of "My", . '
                ,'stack_type' => 'Backend'
            ]
        ];

        foreach ($skills as $skill) {
            $skl = new Skill();
            $skl->title = $skill['title'];
            $skl->info = $skill['info'];
            $skl->stack_type = $skill['stack_type'];

            $skl->save();
        }
    }
}
