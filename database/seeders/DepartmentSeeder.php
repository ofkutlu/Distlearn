<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $departments = ["Bilgisayar Mühendisliği", "Makine Mühendisliği", "Elektrik ve Elektronik Mühendisliği", "Tıp", "Diş Heğimliği", "Hukuk", "Radyo Sinema Televizyon", "Siyasal Bilimler", "Fizik", "Mimarlık"];

        foreach ($departments as $department) {
            DB::table('departments')->insert([
                'name' => $department,
                'faculties_id' => rand(1,10)
            ]);
        }

    }
}
