<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class StoreContact extends FormRequest
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
            'name' => 'bail|required',
            'email' => 'bail|required|email',
            'phone' => [
                'bail',
                'required',
                'regex: /^(01[2689]|09|0[123456789])[0-9]{8}$/',
            ],
            'message' => 'bail|required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => trans('lang.message.name'),
            'email.required' => trans('lang.message.email'),
            'phone.required' => trans('lang.message.mobile'),
            'message.required' => trans('lang.message.mess'),
        ];
    }
}
