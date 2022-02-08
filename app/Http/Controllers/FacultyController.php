<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'faculty_name' => 'required',
            'faculty_id' => 'required'
        ]);
        $query = DB::table('faculties')->insert([
            'name' => $request->input('faculty_name'),
            'id' => $request->input('faculty_id')
        ]);
        if ($query) {
            return back()->with('success', 'Başarılı bir şekilde kaydedilmiştir.');
        } else {
            return back()->with('fail', 'Bir şeyler ters gitti.');
        }
    }
    public function delete($id)
    {
        DB::table('faculties')
            ->where('id', $id)
            ->delete();
        return redirect('/admin/faculties')->with('status', "Başarılı bir şekilde silinmiştir");
    }
}
