<?php

namespace App\Http\Requests;

use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Http\FormRequest;

class AdminSliderRequest extends FormRequest
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
            'file' => 'mimes:jpeg,bmp,png,JPG,JPEG,webp'
        ];

        foreach (config('translatable.locales') as $locale) {
            $rules[$locale.'.title'] = 'required';
            $rules[$locale.'.slogan'] = 'required';
        }
        return $rules;
    }

    public function messages()
    {
        $vilid= RuleFactory::make([
            '%title%.required' => 'Заголовок (% %) обязателен для заполнения',
            '%slogan%.required' => 'Слоган (% %) обязателен для заполнения',
        ]);

        return $vilid;
    }

    public function attributes()
    {
        return [
            'file' => 'Изображение',
        ];
    }
}
