<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $imagePath = public_path('images/rooms');
        $images = glob($imagePath . '/*.{jpg,png,gif}', GLOB_BRACE);
        
        for($i = 0; $i < 8; $i++) {
            DB::table('rooms')->insert([
                'name' => fake()->sentence(2),
                'image' =>  str_replace($imagePath . '/', '', fake()->randomElement($images)),
                'description' => fake()->sentence(6),
                'occupancy' => fake()->numberBetween(1,5),
                'bed_type' => fake()->randomElement(['King size', 'Full size', 'Queen size']),
                'category' => fake()->randomElement(['single-room', 'double-room', 'family-room']),
                'price' => fake()->numberBetween(1000, 10000),
                'room_number' => fake()->numberBetween(100, 999),
                'status' => true
            ]);
        }
    }
}
