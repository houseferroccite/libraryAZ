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
            'name'=>'required|unique:materials,name',
            'author'=>'required',
            'description'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно для заполнения.',
            'unique' => 'Введенный :attribute уже существует, попробуйте другой!',
        ];
    }
}
