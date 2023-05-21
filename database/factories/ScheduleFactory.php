<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class ScheduleFactory extends Factory
{
    protected $model = Schedule::class;

    public function definition()
    {
        $faker = FakerFactory::create();

        return [
            'date' => $faker->date,
            'time' => $faker->time,
            'coach_id' => $faker->numberBetween(1, 10),
            'subscriptions_id' => $faker->numberBetween(1, 10),
        ];
    }
}