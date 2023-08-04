<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Page::factory()->create([
            'slug' => 'terms',
            'title' => 'terms of Service',
            'description' => 'Our terms of service',
            'content' => file_get_contents(database_path('seeders/seeds/terms.md')),
        ]);

        \App\Models\Page::factory()->create([
            'slug' => 'privacy',
            'title' => 'Privacy Policy',
            'description' => 'Our privacy policy',
            'content' => file_get_contents(database_path('seeders/seeds/privacy.md')),
        ]);
    }
}
