<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateLoaiSanPham extends FormRequest
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
           
        ];
    }

    public function message()
{
    $messages = [
        'ten.required' => 'phai nhap ten loai san pham',
        'ten.min' => 'ten it nhat 2 ki tu',
        'ten.max' => 'k duoc de trong',
     
    ];

    return $messages;
}
}
