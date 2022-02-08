<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::orderBy('id')->get();
        return view('admin.teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = Faculty::orderBy('id')->get();
        $departments = Department::orderBy('id')->get();
        return view('admin.teacher.create', compact('faculties'), compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherRequest $request)
    {
        dd(123);
        $teacher = new Teacher();
        $teacher->name = $request->input('teacher_name');
        $teacher->id = $request->input('teacher_no');
        $teacher->email = $request->input('email');
        $teacher->password = $request->input('password');
        $teacher->save();

        if ($teacher->save()) {
            return back()->with('success', 'Başarılı bir şekilde kaydedilmiştir.');
        } else {
            return back()->with('fail', 'Bir şeyler ters gitti.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        DB::table('teachers')
        ->where('id', $id)
            ->delete();
        return redirect('/admin/teachers')->with('status', "Başarılı bir şekilde silinmiştir");
    }
}
