<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\StudentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // StudentFactory::new()->count(20)->create();
        // // User::factory(10)->create();
        // $this->call([
        //     AdminSeeder::class
        // ]);
        $this->call([
            SubjectSeeder::class
        ]);
    }
}
