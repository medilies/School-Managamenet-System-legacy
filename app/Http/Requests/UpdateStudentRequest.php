<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'fname' => ['required', 'max:50',],
            'ar_fname' => ['nullable', 'max:50',],
            'lname' => ['required', 'max:50',],
            'ar_lname' => ['nullable', 'max:50',],
            'bday' => ['required', 'date'],
            'bplace' => ['required', 'max:32',],
            'email' => ['nullable', 'email',],
        ];
    }
}
