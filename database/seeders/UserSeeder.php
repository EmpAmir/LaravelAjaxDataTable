<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 100; $i++) {
            $user = new User;
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->phone_number = $faker->phoneNumber;
            $user->state = $faker->state;
            $user->country = $faker->country;
            $user->save();
        }
    }
}
