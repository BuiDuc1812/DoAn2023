<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
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
            'price' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên sản phẩm không rỗng',
            'name.unique'=>$this->name.' đã tồn tại',
            'price.required'=> 'Giá sản phẩm không rỗng',
            'email.required'=>'Tên sản phẩm không rỗng',
        ];
    }
}
