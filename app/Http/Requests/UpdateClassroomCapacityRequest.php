<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClassroomCapacityRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        $rules = [];

        // Prefixing the numerical IDs form key with K to avoid Laravel's bug when validating numerical Keys
        // The IDs are prefixed within the form HTML too
        for ($i = $this->first_classroom_id; $i < (24 + $this->first_classroom_id); $i++) {
            $rules["k_$i"] = ['required', 'integer'];
        }

        return $rules;
    }
}
