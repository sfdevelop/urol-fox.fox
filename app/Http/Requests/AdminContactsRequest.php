<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminContactsRequest extends FormRequest
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
        $rules = [
            'phone1' => 'required|min:10|max:17',
            'phone2' => 'min:10|max:17|nullable',
            'phone3' => 'min:10|max:17|nullable',
            'email' => 'required|email',
        ];

        foreach (config('translatable.locales') as $locale) {
            $rules[$locale.'.address'] = 'required';

        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'phone1' => 'Главный телефон',
            'phone2' => 'Телефон',
            'phone3' => 'Телефон',
        ];
    }
}
