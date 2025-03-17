<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admind1spelm4g1c@rainhadapaz.h12.br',
        ]);

        // $this->call([
        //     UserSeeder::class
        // ]);

        // User::factory(10)->create();
    }
}
