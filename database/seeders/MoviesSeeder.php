<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            'name' => 'Inception',
            'categoryIds' => '1,2',
            'time' => '148 minutes',
            'star' => 4.5,
            'title' => 'Mind-Bending Action',
            'video' => 'inception.mp4',
            'director' => 'Christopher Nolan',
            'active' => 1,
            'isHome' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movies')->insert([
            'name' => 'The Shawshank Redemption',
            'categoryIds' => '2,3',
            'time' => '142 minutes',
            'star' => 4.8,
            'title' => 'Drama and Redemption',
            'video' => 'shawshank_redemption.mp4',
            'director' => 'Frank Darabont',
            'active' => 1,
            'isHome' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
