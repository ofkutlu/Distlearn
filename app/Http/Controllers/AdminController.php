<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;
use App\Models\Student;
use App\Models\User;
use App\Models\Faculty;
use App\Models\Teacher;
use Illuminate\Auth\Events\Validated;

class AdminController extends Controller
{

    public function login()
    {
        $users = User::orderBy('id')->get();
        return view('admin.admin_login', array('users' => $users));
    }
    public function faculties()
    {
        $faculties = Faculty::orderBy('id')->get();
        return view('admin.faculty.admin_faculty', array('faculties' => $faculties));
    }
    public function departments()
    {
        $departments = Department::orderBy('id')->get();
        return view('admin.department.admin_department', array('departments' => $departments));
    }

    public function students()
    {
        $students = Student::orderBy('id')->get();
        return view('admin.student.admin_student', array('students' => $students));
    }
    public function courses()
    {
        $courses = Course::orderBy('id')->get();
        return view('admin.course.admin_course', array('courses' => $courses));
    }

    public function faculties_add()
    {
        return view('admin.faculty.create_faculty');
    }
    public function departments_add()
    {
        $departments = Faculty::orderBy('id')->get();
        return view('admin.department.create_department', array('faculties' => $departments));
    }
    public function students_add()
    {
        $students_fac = Faculty::orderBy('id')->get();
        $students_dep = Department::orderBy('id')->get();
        return view('admin.student.create_student', array('faculties' => $students_fac), array('departments' => $students_dep));
    }
    public function courses_add()
    {
        $courses_fac = Faculty::orderBy('id')->get();
        $courses_dep = Department::orderBy('id')->get();
        $courses_tch = Teacher::orderBy('id')->get();
        return view('admin.course.create_course', array('teachers' => $courses_tch), array('departments' => $courses_dep));
    }
}
