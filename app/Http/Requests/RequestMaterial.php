<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestMaterial extends FormRequest
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
            'type_id'=>'required',
            'category_id'=>'required',
            'name'=>'required|min:10|max:50|unique:materials,name',
            'author'=>'required|min:10|max:50|',
            'description'=>'required|min:10|max:255|',
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
