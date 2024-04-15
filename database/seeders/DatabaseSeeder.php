<?php

namespace Database\Seeders;

use App\Models\Chauffeur;
use App\Models\User;
use App\Models\Voiture;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Voiture::factory(10)->create();
        Chauffeur::factory(15)->create();
    }
}
