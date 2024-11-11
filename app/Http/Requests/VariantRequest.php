<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VariantRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'product_id' => 'required|exists:products,id|bail',
            'quantity' => 'required|integer|min:0',
            'color' => 'required',
            'price' => 'required|integer|min:0',
            'price_khuyen_mai' => 'nullable|integer|min:0',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'image_main' => 'image'
        ];
    }

    public function messages()
    {
        return [
            'product_id.required' => 'Cần chọn sản phẩm',
            'product_id.bail' => 'Cần chọn sản phẩm',
            'product_id.exists' => 'Sản phẩm chưa tồn tại để tạo biến thể',
            'quantity.required' => 'Nhập số lượng sản phẩm',
            'quantity.integer' => 'Số lượng sai định dạng',
            'quantity.min' => 'Số lượng phải từ 0 trở lên',
            'color.required' => 'Nhập tên màu',
            'price.required' => 'Nhập giá sản phẩm',
            'price.integer' => 'Gía sai định dạng',
            'price.min' => 'Gía sản phẩm phải 0 trở lên',
            'price_khuyen_mai.integer' => 'Gía sai định dạng',
            'price_khuyen_mai.min' => 'Gía sản phẩm phải 0 trở lên',
            'start_date.date' => 'Ngày sai định dạng',
            'end_date.date' => 'Ngày sai định dạng',
            'image_main.image' => 'Vui lòng chọn file ảnh'
        ];
    }
}
