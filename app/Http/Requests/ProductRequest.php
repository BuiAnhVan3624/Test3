<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $productId = $this->route('id');
        return [
            'name' => 'required|max:255|unique:products,name,' . $productId,
            'category_id' => 'required|exists:categories,id'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.max' => 'Tên quá dài',
            'name.unique' => 'Tên đã tồn tại',
            'category_id.required' => 'Vui lòng chọn thương hiệu',
            'category_id.exists' => 'Thương hiệu không tồn tại' 
        ];
    }
}
