<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;
use rule;
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
            'username'=>"required"    ,
            'fullname' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'Vui long nhap username',
            'username.unique' => 'username da ton tai roi',
            'fullname.required' => 'Vui long nhap ho va ten'
        ];
    }
}
