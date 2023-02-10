<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $max = 100;
        User::where("id", "<>", 0)->delete();
        for($i = 1; $i <=$max; $i++)
        {
            $faker = Faker::create();
            $gender = rand(1,2);
            $nick_name = $gender == 1 ? $faker->firstNameMale : $faker->firstNameFemale;
            $password = Hash::make('secret');
            User::create([
                'username'=> $faker->userName,
                'password'=> $password,
                'email'=> $faker->safeEmail,
                'phone'=> $faker->phoneNumber,
                'name'=> $nick_name." ".$faker->lastName,
                'position'=> $faker->jobTitle,
                'sort'=>rand(1, $max),
                'is_guest'=> rand(0, 1),
                'is_published'=> 1,
                'remember_token'=> md5(time())
            ]);
        }
    }
}
