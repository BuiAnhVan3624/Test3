<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $categoryId = $this->route('id');
        return [
            'name' => 'required|alpha_num|max:255|unique:categories,name,' . $categoryId,
            'image' => 'image'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được để trống',
            'name.alpha_num' => 'Tên phải là chữ cái hoặc chữ số',
            'name.max' => 'Tên quá dài',
            'name.unique' => 'Thương hiệu này đã tồn tại',
            'image.image' => 'Vui lòng chọn file ảnh'
        ];
    }
}
