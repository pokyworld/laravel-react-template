<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
 
        // Create 10 user records
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->firstName.' '.$faker->lastName,
                'email' => $faker->companyEmail,
                'password' => Hash::make('password'),
                'country_code' => '+'.substr($faker->e164PhoneNumber, 1, 2),
                'phone' => '0'.substr($faker->e164PhoneNumber, -9),
            ]);
        }  
        // add des also
        User::create([
            'name' => 'Des Butler',
            'email' => 'des@pokyworld.com',
            'password' => Hash::make('password'),
            'country_code' => '+66',
            'phone' => '0949514996',
        ]);    
    }
}
