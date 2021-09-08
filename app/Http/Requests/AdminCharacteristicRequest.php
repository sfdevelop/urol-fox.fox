<?php

namespace App\Http\Requests;

use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Http\FormRequest;

class AdminCharacteristicRequest extends FormRequest
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
        foreach (config('translatable.locales') as $locale) {
            $rules[$locale.'.title'] = 'required';

        }

        return $rules;
    }

    public function messages()
    {
        return RuleFactory::make([
            '%title%.required' => 'Заголовок (% %) обязателен для заполнения',
        ]);

    }
}
