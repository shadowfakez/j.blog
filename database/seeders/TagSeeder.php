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
            'title' => 'Серия А',
            'slug' => 'serie_a',
        ]);
        DB::table('tags')->insert([
            'title' => 'Лига Чемпионов',
            'slug' => 'champions_league',
        ]);
        DB::table('tags')->insert([
            'title' => 'Сборные',
            'slug' => 'nationals',
        ]);
        DB::table('tags')->insert([
            'title' => 'Трансферы',
            'slug' => 'transfers',
        ]);
        DB::table('tags')->insert([
            'title' => 'День матча',
            'slug' => 'matchday',
        ]);
        DB::table('tags')->insert([
            'title' => 'Контракты',
            'slug' => 'contracts',
        ]);
        DB::table('tags')->insert([
            'title' => 'Фото',
            'slug' => 'photos',
        ]);
        DB::table('tags')->insert([
            'title' => 'Интервью',
            'slug' => 'interview',
        ]);
        DB::table('tags')->insert([
            'title' => 'Аналитика',
            'slug' => 'analytics',
        ]);

    }
}
