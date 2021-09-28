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
            'file' => 'mimes:jpeg,bmp,png,JPG,JPEG,webp| dimensions:min_width=800,min_height=600,max_width=1600,max_height=1200|max:3360 ',
            'price' => 'required|numeric',
            'price_sale' => 'nullable|numeric',
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
            'file.dimensions'=>'Поле Изображение имеет недопустимые размеры изображения. Минимальная ширина :min_width минимальная высота :min_height . Максимальная ширина :max_width Максимальная высота :max_height'
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
