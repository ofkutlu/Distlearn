<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = ["Yapay Zeka", "Görüntü İşleme", "Algoritma ve Programlama", "Mikroişlemciler ve Mikro Denetleyiciler", "Bilgisiyar Mimarisi ve Organizasyonu", "Mühendislik İstatistiği", "Mühendislik Ekonomisi", "Veri İletişim Teknikleri", "Bulut Bilişim"];

        foreach ($courses as $course) {
            DB::table('courses')->insert([
                'name'=> $course,
            ]);
        }
    }
}
