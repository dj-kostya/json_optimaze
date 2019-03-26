<?php

use App\City;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $city = [
            1 => 'Москва',
            2 => 'Минск',
            3 => 'Астана',
            4 => 'Пекин',
        ];

        City::truncate();
        User::truncate();

        foreach ($city as $id => $name) {
            City::create([
                'id' => $id,
                'name' => $name,
            ]);
        }

        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            User::create([
                'name' => $faker->name(),
                'email' => $faker->email,
                'password' => '*****',
                'city_id' => array_rand($city),
                'invited_by' => $i < 10 ? null : rand(1, 9)
            ]);
        }
    }
}
