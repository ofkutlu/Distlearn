<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_login');
    }
    public function faculties()
    {
        return view('admin.admin_faculty');
    }
    public function departments()
    {
        return view('admin.admin_department');
    }
    public function teachers()
    {
        return view('admin.admin_teacher');
    }
    public function students()
    {
        return view('admin.admin_student');
    }
    public function courses()
    {
        return view('admin.admin_course');
    }

    public function faculties_add()
    {
        return view('admin.create_faculty');
    }
    public function departments_add()
    {
        return view('admin.create_department');
    }
    public function teachers_add()
    {
        return view('admin.create_teacher');
    }
    public function students_add()
    {
        return view('admin.create_student');
    }
    public function courses_add()
    {
        return view('admin.create_course');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
