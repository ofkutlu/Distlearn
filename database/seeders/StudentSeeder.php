<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {

            DB::table('students')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password,
                'faculties_id' => rand(15,50),
                'departments_id' => rand(51,99),
            ]);
        }
    }
}
