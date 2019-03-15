<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormExampleRequest extends FormRequest
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
            'ten' => 'required|min:2|nullable',
            'gia' => 'required|numeric',
            'image' => 'required|nullable',
        ];
    }

    public function message()
{
    $messages = [
        'ten.required' => 'We need to know your full name!',
        'ten.min' => 'Name size must be between 2 and 30!',
        'ten.max' => 'Name size must be between 2 and 30!',
        'gia.numeric' => 'chi dc nhap so ',
    ];

    return $messages;
}
}
