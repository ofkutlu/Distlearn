<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDepartmentRequest;
use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::orderBy('id')->get();
        return view('admin.department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = Faculty::orderBy('id')->get();
        return view('admin.department.create', compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepartmentRequest $request)
    {
        $department = new Department();
        $department->faculties_id = $request->input('faculty_id');
        $department->name = $request->input('department_name');
        $department->id = $request->input('department_id');
        $department->save();

        if ($department->save()) {
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
        dd("Ömer");
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
        $department = Department::where('id', $id)->delete();
        return redirect(action('App\Http\Controllers\Admin\DepartmentController@index'))->with('status', "Başarılı bir şekilde silinmiştir");

        // DB::table('departments')
        // ->where('id', $id)
        //     ->delete();
        // return redirect(action('App\Http\Controllers\Admin\DepartmentController@index'))->with('status', "Başarılı bir şekilde silinmiştir");
    }
}
