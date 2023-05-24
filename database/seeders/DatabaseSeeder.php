<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'id' => 1,
            'category' => 'Обувь'
        ]);

        Product::create([
            'title' => 'TOPSHOP КОЖАНЫЕ БОТИЛЬОНЫ МОЛОЧНОГО ЦВЕТА',
            'img' => '/img/large_14537885-3.jpeg',
            'price' => 4900,
            'year' => 2000,
            'count' => 4,
            'category' => 1,
            'model' => 'Топ модель'
        ]);

        Product::create([
            'title' => 'DR MARTENS ZUMA II БОТИЛЬОНЫ С ЗАСТЁЖКОЙ',
            'img' => '/img/large_13258025-4.jpeg',
            'price' => 15790,
            'year' => 2020,
            'count' => 2,
            'category' => 1,
            'model' => 'Топ модель'
        ]);

        Product::create([
            'title' => 'DEPP КОЖАНЫЕ БОТИЛЬОНЫ С ФИГУРНЫМ КАБЛУКОМ',
            'img' => '/img/large_13748509-3.jpeg',
            'price' => 7290,
            'year' => 2022,
            'count' => 2,
            'category' => 1,
            'model' => 'Топ модель'
        ]);

        Product::create([
            'title' => 'ЗЕЛЕНЫЕ КОЖАНЫЕ БОТИЛЬОНЫ НА КАБЛУКЕ ASOS DESIGN',
            'img' => '/img/large_14064969-1-green.jpeg',
            'price' => 7290,
            'year' => 2021,
            'count' => 10,
            'category' => 1,
            'model' => 'Топ модель'
        ]);
    }
}
