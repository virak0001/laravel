<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 100 ; $i++) { 
            DB::table('student')->insert([
                'FirstName'=>$faker->firstName,
                'LastName'=>$faker->lastName,
                'Age'=>$faker->numberBetween($min = 15, $max = 25)
        ]);
        }
    }
}
