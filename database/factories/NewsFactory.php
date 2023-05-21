<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition()
    {
        $faker = FakerFactory::create();

        return [
            'title' => $faker->sentence,
            'description' => $faker->paragraph,
            'image' => 'news.jpg'
        ];
    }
}






