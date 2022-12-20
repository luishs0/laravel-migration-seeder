<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->sentence(1, false);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->time_departure = $faker->time();
            $train->time_arrival = $faker->time();
            $train->train_code = $faker->bothify('???###');
            $train->train_wagons = $faker->randomDigitNot(0);
            $train->on_hour = $faker->numberBetween(0, 1);
            $train->canceled = $faker->numberBetween(0, 1);
            $train->save();
        }
    }
}
