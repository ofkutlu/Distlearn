<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;





class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=1;$i<=10;$i++) {

            DB::table('teachers')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password
            ]);
        }
    }
}
