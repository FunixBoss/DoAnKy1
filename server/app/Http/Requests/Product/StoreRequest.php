<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // must to be True
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */

    //  php artisan make:request Member/StoreRequest
    public function rules()
    {
        return [
            'name' => 'required|unique:products,name',
            'price' => 'required',
            'image' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui long nhap ten san pham',
            'name.unique' => 'Ten san pham da ton tai roi',
            'price.required' => 'Vui long nhap gia san pham',
            'image.required' => 'Vui long nhap hinh anh san pham'
        ];
    }
}
