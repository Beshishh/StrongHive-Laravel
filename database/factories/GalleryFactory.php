<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class GalleryFactory extends Factory
{
    protected $model = Gallery::class;

    public function definition()
    {
        $faker = FakerFactory::create();

        return [
            'name' => $faker->sentence,
            'image' => 'gallery.jpg'
        ];
    }
}