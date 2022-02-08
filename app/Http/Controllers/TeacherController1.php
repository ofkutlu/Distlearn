<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Models\Course;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController1 extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id')->get();
        return view('teacher.teacher_home', array('courses' => $courses));
    }

    public function teacher_content()
    {
        return view('teacher.course_content');
    }
    public function teacher_weeks()
    {
        return view('teacher.weeks_page');
    }
}
