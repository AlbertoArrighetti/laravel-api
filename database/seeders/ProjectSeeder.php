<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $projetcs = [
            [
                'title' => 'Esempio',
                'description' => 'Esercizio di esempio',
                'thumb' => '',
                'url' => 'https://github.com/AlbertoArrighetti?tab=repositories',
            ],
        ];


        foreach ($projetcs as $project) {
            $newProject = new Project();

            $newProject->title = $project['title'];
            $newProject->description = $project['description'];
            $newProject->thumb = $project['thumb'];
            $newProject->url = $project['url'];

            $newProject->save();
        }
    }
}
