<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Rockers extends FormRequest
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
            'alias' => ['required', 'regex:/^[^<>\/;]+$/', 'unique:rockers,alias'],
            'first_name' => 'alpha|nullable',
            'last_name' => 'alpha|nullable',
            'bday' => 'before:today',
            'died' => 'after:bday|before:today|nullable',
            ];
    }
}
