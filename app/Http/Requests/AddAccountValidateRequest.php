<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAccountValidateRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên tài khoản không được để trống',
            'name.unique'=>$this->name.' đã tồn tại',
            'email.required'=>'Tài khoản không được để trống',
            'email.email'=>'Tài khoản sai định dạng',
            'email.unique'=>'Tài khoản đã tồn tại',
            'password.required'=>'Mật khẩu không được để trống',
        ];
    }
}
