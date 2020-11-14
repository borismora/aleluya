<?php

use Illuminate\Database\Seeder;
use App\Task;
use Faker\Factory as Faker;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $tasks = array();

        for ($i = 1; $i <= 5; $i++) {

            Task::create([
                'keep' => $faker->text(80),
            ]);
        }

    }
}
