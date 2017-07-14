<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRegRequest extends FormRequest
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
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'gender' => 'required|string|min:4|max:6',
            'datebirth' => 'required|date',
            'healthcardnumber' => 'required|numeric',
            'version_code' => 'required|string',
            'parents_id' => 'required|numeric'
        ];
    }
}
