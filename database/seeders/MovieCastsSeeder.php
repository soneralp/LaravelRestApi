<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieCastsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie_casts')->insert([
            'movie_id' => 1,
            'cast_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_casts')->insert([
            'movie_id' => 1,
            'cast_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_casts')->insert([
            'movie_id' => 2,
            'cast_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
