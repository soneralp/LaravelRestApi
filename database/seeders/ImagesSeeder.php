<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            'movie_id' => 1,
            'uri' => 'image1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('images')->insert([
            'movie_id' => 2,
            'uri' => 'image2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('images')->insert([
            'movie_id' => 3,
            'uri' => 'image3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
