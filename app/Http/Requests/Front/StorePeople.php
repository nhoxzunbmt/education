<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class StorePeople extends FormRequest
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
            'mobile' => [
                'bail',
                'required',
                'regex: /^(01[2689]|09|0[123456789])[0-9]{8}$/',
            ],
            'city' => 'bail|required',
            'city_id' => 'bail|required',
            'number' => 'bail|required|between: 1, 7',
            'time' => 'bail|required|between: 1, 4',
            'level' => 'bail|required|between: 1, 12',
            'grades' => 'bail|required|between: 1, 18',
            'subjects' => 'bail|required|min: 1|between: 1, 24',
            'days' => 'bail|required|min: 1|between: 1, 7',
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
            'mobile.required' => trans('lang.message.mobile'),
            'city.required' => trans('lang.message.city'),
            'city_id.required' => trans('lang.message.city_id'),
            'address.required' => trans('lang.message.address'),
            'number.required' => trans('lang.message.number'),
            'time.required' => trans('lang.message.time'),
            'level.required' => trans('lang.message.level'),
            'grade.required' => trans('lang.message.grade'),
            'subjects.required' => trans('lang.message.subjects'),
            'days.required' => trans('lang.message.days'),
            'term.required' => trans('lang.message.term'),
        ];
    }
}
