<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'name' => 'required',
            'postcode' => 'required|integer|min:0|max:6',
            'address' => 'required',
            'building' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'ユーザー名を入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.integer' => '数値を入力してください',
            'postcode.min' => '0以上の数値を入力してください',
            'postcode.max' => '6以下の数値を入力してください',
            'address.required' => '住所を入力してください',
        ];
    }
}
