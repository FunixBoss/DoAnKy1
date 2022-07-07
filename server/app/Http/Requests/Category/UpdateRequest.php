<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cate_name'=>'required|unique:categories,cate_name,'
        ];
    }
    public function messages()
    {
        return [
            'cate_name.unique'=>'',
            'cate_name.required'=>'Phải nhập danh mục'

        ];
    }
}
