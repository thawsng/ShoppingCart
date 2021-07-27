<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|min:10|max:15',
            'price' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên.',
            'name.min' => 'Tên phải lớn hơn 10 ký tự.',
            'name.max' => 'Tên phải nhỏ hơn 15 ký tự.',
            'price.required' => 'Vui lòng nhập giá.'
        ];
    }

    // validate theo business riêng.
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if($this->get('name') == 'xuanhung'){
                $validator->errors()->add('name', 'Tao không chơi với thằng Hùng.');
            }
        });
    }
}
