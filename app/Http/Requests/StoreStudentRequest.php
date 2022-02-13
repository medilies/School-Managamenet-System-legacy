<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StoreStudentRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        $this->merge([
            'classroom_id' => $this->classroom,
        ]);
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
            'family_id' => ['required', 'integer',],
            'classroom_id' => ['required', 'integer'], // Rule::in(nonArchivedActiveClassroomsIds)
            'ex_registration_establishment' => ['nullable', 'max:50'],
            'ex_registration_classroom' => ['nullable', Rule::in(DB::table('class_types')->pluck('name')->toArray())],
        ];
    }

    // unique(['fname', 'lname', 'bday']);
}
