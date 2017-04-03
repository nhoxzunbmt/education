<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'log' => 'bail|required',
            'password' => 'bail|required',
            'captcha' => 'bail|required|bone_captcha'
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
            'log.required' => trans('lang.message.log'),
            'password.required' => trans('lang.message.password'),
            'captcha.required' => trans('lang.message.captcha')
        ];
    }
}
