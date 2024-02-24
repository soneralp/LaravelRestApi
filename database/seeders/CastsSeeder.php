<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CastsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('casts')->insert([
            'name' => 'Robert Downey Jr.',
            'image' => 'robert_downey_jr.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('casts')->insert([
            'name' => 'Scarlett Johansson',
            'image' => 'scarlett_johansson.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('casts')->insert([
            'name' => 'Chris Hemsworth',
            'image' => 'chris_hemsworth.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
