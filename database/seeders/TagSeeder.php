<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'title' => 'Тег 1',
            'slug' => 'tag_1',
        ]);
        DB::table('tags')->insert([
            'title' => 'Тег 2',
            'slug' => 'tag_2',
        ]);
        DB::table('tags')->insert([
            'title' => 'Тег 3',
            'slug' => 'tag_3',
        ]);
        DB::table('tags')->insert([
            'title' => 'Тег 4',
            'slug' => 'tag_4',
        ]);
        DB::table('tags')->insert([
            'title' => 'Тег 5',
            'slug' => 'tag_5',
        ]);
        DB::table('tags')->insert([
            'title' => 'Тег 6',
            'slug' => 'tag_6',
        ]);
        DB::table('tags')->insert([
            'title' => 'Тег 7',
            'slug' => 'tag_7',
        ]);
        DB::table('tags')->insert([
            'title' => 'Тег 8',
            'slug' => 'tag_8',
        ]);
        DB::table('tags')->insert([
            'title' => 'Тег 9',
            'slug' => 'tag_9',
        ]);

    }
}
