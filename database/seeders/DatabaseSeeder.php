<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PageSeeder::class);

        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Mouctar DIALLO',
            'email' => 'mouctar@yazida.io',
            'password' => Hash::make('password'),
        ]);
    }
}
