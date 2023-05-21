<?php

namespace Database\Factories;

use App\Models\Coach;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class CoachFactory extends Factory
{
    protected $model = Coach::class;

    public function definition()
    {
        $faker = FakerFactory::create(); 

        return [
            "firstname" => $faker->firstName,
            "lastname" => $faker->lastName,
            "description" => $faker->paragraph,
            "image" => 'coach.jpg'
        ];
    }
}