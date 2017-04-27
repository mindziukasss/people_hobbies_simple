<?php
/**
 * Created by PhpStorm.
 * User: Code Academy
 * Date: 4/27/2017
 * Time: 12:03 PM
 */

namespace App\Http\Controllers;


use App\Models\PHCities;
use App\Models\PHConnectionsPeopleHobbies;
use App\Models\PHHobies;
use App\Models\PHPeople;
use Faker\Factory;

class WPFakeDataController
{
    public function generatePeople(int $count = 2)
    {
        $faker = Factory::create();
        for ($i = 0; $i < $count; $i++) {
            PHPeople::create([
                'id' => $faker->uuid,
                'city_id' => PHCities::all()->random()->id,
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'phone_number' => $faker->phoneNumber,
            ]);
        }

    }
    public function generateCities(int $count = 2)
    {
        $faker = Factory::create();
        for ($i = 0; $i < $count; $i++) {
            PHCities::create([
                'id' => $faker->uuid,
                'name' => $faker->city,
            ]);
        }

    }
    public function generateHobies(int $count = 2)
    {
        $faker = Factory::create();
        for ($i = 0; $i < $count; $i++) {
            PHHobies::create([
                'id' => $faker->uuid,
                'name' => $faker->randomElement(['play','read','game'])
            ]);
        }

    }

    public function generateConnectionsPeopleHobies(int $count = 2)
    {
        $faker = Factory::create();
        for ($i = 0; $i < $count; $i++) {
            PHConnectionsPeopleHobbies::create([
                'id' => $faker->uuid,
                'people_id' => PHPeople::all()->random()->id,
                'hobbies_id' => PHHobies::all()->random()->id
            ]);
        }

    }




}