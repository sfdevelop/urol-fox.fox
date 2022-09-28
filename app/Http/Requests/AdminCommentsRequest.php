<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class AdminCommentsRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'description' => 'required|string',
            'sort' => 'required|integer',
            'is_public' => 'required|boolean',
            'date'=>'required'
        ];
    }

    public function prepareForValidation()
    {
        $date=$this->date_picker.' '.$this->time_picker;

        $this->merge([
            'date' => Carbon::create($date),
        ]);
    }
}
