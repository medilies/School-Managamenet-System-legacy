<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreClientRequest extends FormRequest
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
            'lname' => ['required', 'max:50',],
            'phone' => ['required'], // REGEX
            'email' => ['required', 'email',],
            'cni' => ['nullable', 'max:20',],
            'address' => ['required', 'max:90',],
            'profession' => ['required', 'max:32',],
            'family_id' => ['nullable', 'integer',], // required_if:anotherfield,value,...
            'family_title' => ['nullable', Rule::in(['father', 'mother']), 'max:32'], // required_if:anotherfield,value,...
        ];

        // unique('family_id', 'family_title')
    }
}
