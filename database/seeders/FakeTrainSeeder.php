<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

use Faker\Generator as Faker;

class FakeTrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $train = new Train;

        $train->departure_station = $faker->city();
        $train->arrival_station = $faker->city();
        $train->departure_time = $faker->date() . ' ' .  $faker->time();
        $train->arrival_time = $faker->date() . ' ' . $faker->time();
        $train->train_code = $faker->regexify('[A-Z]{4}[0-9]{2}');
        $train->wagons_number = $faker->randomDigitNotNull();
        $train->in_time = $faker->numberBetween(0, 1);
        $train->canceled = $faker->numberBetween(0, 1);

        $train->save();
    }
}
