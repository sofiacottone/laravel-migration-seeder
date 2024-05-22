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
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->randomElement(['Amtrak', 'BNSF Railway', 'Canadian National Railway', 'CPKC Railway', 'CSX Transportation', 'Norfolk Southern Railway', ' Union Pacific Railroad']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween(today(), '+2 days');
            $newTrain->arrival_time = $faker->dateTimeBetween(today(), '+2 days');
            $newTrain->train_code = $faker->regexify('[A-Z]{3}[0-4]{5}');
            $newTrain->carriages_number = $faker->numberBetween(1, 12);
            $newTrain->is_ontime = $faker->randomElement([0, 1]);
            $newTrain->is_canceled = $faker->randomElement([0, 1]);

            $newTrain->save();
        }
    }
}
