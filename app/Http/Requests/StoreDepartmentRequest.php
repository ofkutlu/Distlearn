<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartmentRequest extends FormRequest
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
                'department_name' => 'required',
                'department_id' => 'required',
                'faculty_id' => 'required'
            ];
    }
    public function attributes()
    {
        return
            [
                'department_name' => 'Department Name',
                'department_id' => 'Department Id',
                'faculty_id' => 'Faculty Id'
            ];
    }
}
