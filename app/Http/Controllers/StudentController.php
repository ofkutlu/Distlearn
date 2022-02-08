<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id')->get();
        return view('student_home', array('courses' => $courses));
    }

    public function student_weeks()
    {
        return view('student_weeks');
    }

    public function student_content()
    {
        return view('course_content');
    }

    public function delete($id)
    {
        DB::table('students')
        ->where('id', $id)
            ->delete();
        return redirect('/admin/students')->with('status', "Başarılı bir şekilde silinmiştir");
    }

}
