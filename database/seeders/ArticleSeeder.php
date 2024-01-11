<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        foreach (range(1,50) as $item) {
            Article::create([
                'title' => $faker->sentence(3),
                'body' => $faker->paragraph(5, true),
            ]);
        }
    }
}
