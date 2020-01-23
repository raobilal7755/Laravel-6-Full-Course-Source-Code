<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        return [
            "name"=>"required|max:12|min:6|unique:students",
            "email"=>"required|min:6|max:20|email|unique:students",
            "pass"=>"required",
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'email.required'  => 'A email is required',
            'email.min'  => 'A min is 6 is required',
            'pass.required'  => 'A pass is required',
        ];
    }
}
