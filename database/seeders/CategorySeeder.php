<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Новости',
            'slug' => 'news',
        ]);
        DB::table('categories')->insert([
            'title' => 'Матчи',
            'slug' => 'matches',
        ]);
        DB::table('categories')->insert([
            'title' => 'Аналитика',
            'slug' => 'analytics',
        ]);
        DB::table('categories')->insert([
            'title' => 'История',
            'slug' => 'history',
        ]);
    }
}
