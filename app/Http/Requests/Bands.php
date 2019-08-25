<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Bands extends FormRequest
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
            'name' => ['required', 'regex:/^[^<>\/;]+$/', 'unique:bands,name'],
            'start_at' => 'before:today',
            'finish_at' => 'after:start_at|before:today|nullable',
            'website' => ['regex:/^www\.[\w]+\.[\w]{2,3}$/']
        ];
    }
}
