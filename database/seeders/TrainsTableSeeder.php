<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->words(2, true);
            $newTrain->start_station = $faker->city();
            $newTrain->end_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival_time = $faker->dateTimeInInterval($newTrain->departure_time, "+20 hour");
            $newTrain->train_code = $faker->bothify('####');
            $newTrain->carriage_nmbr = $faker->numberBetween(1, 10);
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->deleted = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
