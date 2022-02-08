<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function delete($id)
    {
        DB::table('courses')
            ->where('id', $id)
            ->delete();
        return redirect('/admin/courses')->with('status', "Başarılı bir şekilde silinmiştir");
    }
}
