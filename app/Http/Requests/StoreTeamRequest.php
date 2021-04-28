<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
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
            'name' => ['max:20', 'min:3', 'unique:teams', 'string', 'required'],
            'tag' => ['max: 4','min: 2', 'regex: /[a-zA-Z]+/', 'required', 'unique:teams'],
            'homepage' => ['min:8', 'max: 30', 'nullable'],
            'country' => ['min: 1', 'required'],
            'filename' => ['image'],
        ];
    }
}
