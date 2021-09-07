<?php

namespace App\Http\Requests;

use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Http\FormRequest;

class AdminProductRequest extends FormRequest
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
            'file' => 'mimes:jpeg,bmp,png,JPG,JPEG,webp',
            'price' => 'required|numeric|between:0,99',
            'price_sale' => 'nullable|numeric|between:0,99',
            'category_id' => 'required',
            'sort' => 'required|integer',
        ];

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

    public function attributes()
    {
        return [
            'file' => 'Изображение',
            'price' => 'Цена',
            'category_id' => 'Категория',
            'price_sale' => 'Цена со скидкой',
            'sort' => 'Сортировка',
        ];
    }
}
