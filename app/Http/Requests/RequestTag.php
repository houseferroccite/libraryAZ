<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestTag extends FormRequest
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
            'nameType'=>'required|min:10|max:50|unique:types,nameType',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно для заполнения.',
            'min' => 'Поле :attribute должно иметь минимум :min символа.',
            'unique' => 'Введенный :attribute уже существует, попробуйте другой!',
        ];
    }
}
