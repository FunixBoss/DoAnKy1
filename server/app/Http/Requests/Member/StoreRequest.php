<?php

namespace App\Http\Requests\Member;

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
            'username' => 'required|unique:members',
            'password' => 'required',
            'fullname' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'Vui long nhap username',
            'username.unique' => 'username da ton tai roi',
            'password.required' => 'Vui long nhap password',
            'fullname.required' => 'Vui long nhap ho va ten'
        ];
    }
}
