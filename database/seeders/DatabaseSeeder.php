<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'surname' => 'Admin',
            'username' => 'Admin97x',
            'birthday' => fake()->date(),
            'email' => 'admin@email.com',
            'password' => bcrypt('asdasd'),
            'role' => 'admin'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Staff',
            'surname' => 'Staff',
            'username' => 'Staff97x',
            'birthday' => fake()->date(),
            'email' => 'staff@email.com',
            'password' => bcrypt('asdasd'),
            'role' => 'staff'
        ]);

    }
}
