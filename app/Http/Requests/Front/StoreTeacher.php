<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacher extends FormRequest
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
            'email' => 'bail|required|email|unique:users',
            'gender' => 'bail|required|between: 1, 2',
            'birthday' => 'bail|required|date_format: "d-m-Y"',
            'mobile' => [
                'bail',
                'required',
                'unique:users',
                'regex: /^(01[2689]|09|0[123456789])[0-9]{8}$/',
            ],
            'city_id' => 'bail|required',
            'districts' => 'bail|required|min: 1',
            'avatar' => 'bail|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'number' => 'bail|required|between: 1, 7',
            'time' => 'bail|required|between: 1, 4',
            'level' => 'bail|required|between: 1, 5',
            'grades' => 'bail|required|between: 1, 18',
            'subjects' => 'bail|required|min: 1|between: 1, 24',
            'days' => 'bail|required|min: 1|between: 1, 7',
            'captcha' => 'bail|required|bone_captcha',
            'term' => 'bail|required'
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
            'gender.required' => trans('lang.message.gender'),
            'birthday.required' => trans('lang.message.birthday'),
            'city.required' => trans('lang.message.city'),
            'city_id.required' => trans('lang.message.city_id'),
            'address.required' => trans('lang.message.address'),
            'mobile.required' => trans('lang.message.mobile'),
            'avatar' => trans('lang.message.avatar'),
            'number.required' => trans('lang.message.number'),
            'time.required' => trans('lang.message.time'),
            'level.required' => trans('lang.message.level'),
            'grade.required' => trans('lang.message.grade'),
            'subjects.required' => trans('lang.message.subjects'),
            'days.required' => trans('lang.message.days'),
            'captcha.required' => trans('lang.message.captcha'),
            'term.required' => trans('lang.message.term')
        ];
    }
}
