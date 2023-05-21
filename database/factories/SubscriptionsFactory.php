<?php

namespace Database\Factories;

use App\Models\Subscriptions;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class SubscriptionsFactory extends Factory
{
    protected $model = Subscriptions::class;

    public function definition()
    {
        $faker = FakerFactory::create();

        return [
            'name' => $faker->sentence,
            'description' => $faker->paragraph,
            'price' => $faker->numberBetween(1, 100),
            'days' => $faker->numberBetween(1, 100),
        ];
    }
}