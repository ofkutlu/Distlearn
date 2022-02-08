<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return
            [
                'name' => 'required',
                'teacher_no' => 'required',
                'email' => 'required',
                'department_id' => 'required',
                'faculty_id' => 'required'
            ];
    }
    public function attributes()
    {
        return
            [
            'name' => 'Teacher Name',
            'teacher_no' => 'Teacher Identity No',
            'email' => 'Teacher Email',
            'department_id' => 'Department Name',
            'faculty_id' => 'Faculty Name'
            ];
    }
}
