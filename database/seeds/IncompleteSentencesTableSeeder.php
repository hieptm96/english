<?php

use Illuminate\Database\Seeder;

class IncompleteSentencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('incomplete_sentences')->insert([
              'question' => $faker->name,
              'A' => $faker->name,
              'B' => $faker->name,
              'C' => $faker->name,
              'D' => $faker->name,
              'answer' => $faker->name,
              'exam_id' => 1
            ]);
        }
    }
}
