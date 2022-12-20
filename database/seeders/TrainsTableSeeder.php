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
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->words(2);
            $newTrain->start_station = $faker->word(1);
            $newTrain->end_station = $faker->word(1);
            $newTrain->departure_time = $faker->date('22_12_d');
            $newTrain->arrival_time = $faker->date('22_12_d');
            $newTrain->train_code = $faker->word(1);
            $newTrain->carriage_nmbr = $faker->numberBetween(1, 10);
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->deleted = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
