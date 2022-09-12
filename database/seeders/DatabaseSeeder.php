<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(5)->create();

        \App\Models\Service::factory(100)->create([
            'title' => 'title',
            'slug' => 'slug',
            'seo_title' => 'seo_title',
            'seo_keywords' => 'seo_keywords',
            'seo_description' => 'seo_description',
            'content' => 'content',
            'summary' => 'summary',
            'icon' => 'icon',
            'img' => 'img',
        ]);


    }
}
