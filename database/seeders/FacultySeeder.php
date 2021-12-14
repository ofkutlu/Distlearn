<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faculties = ["Teknoloji Fakültesi", "Ziraat Fakültesi", "Tıp Fakültesi", "Diş Hekimliği Fakültesi", "Hukuk Fakültesi", "İletişim Fakültesi", "İktisadi ve İdari Bilimler Fakültesi", "Fen Fakültesi", "Edebiyat Fakültesi", "Mimarlık Fakültesi"];

        foreach ($faculties as $faculty) {
            DB::table('faculties')->insert([
                'name' => $faculty,
            ]);
        }
    }
}
