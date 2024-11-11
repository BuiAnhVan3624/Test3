@extends('layout.admin.default')
@section('main')

@push('styles')
<style>
    select {
        width: 100%;
        padding: 6px 12px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 16px;
    }
</style>
@endpush

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Chỉnh sửa biến thể sản phẩm</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('variants.updatePutVariant', $variant->id) }}" method="post" class="form" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">Chọn sản phẩm</label>
                    <select name="product_id">
                        <option value="" selected>-- Lựa chọn --</option>
                        @foreach($product as $value)
                        <option value="{{ $value->id }}"
                            @if($value->id == $variant->product_id)
                                selected
                            @endif
                        >
                            {{ $value->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('product_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Số lượng</label>
                    <input type="text" name="quantity" class="form-control" placeholder="Nhập số lượng sản phẩm..." value="{{ $variant->quantity }}">
                    @error('quantity')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Màu</label>
                    <input type="text" name="color" class="form-control" placeholder="Nhập màu sản phẩm..." value="{{ $variant->color }}">
                    @error('color')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Gía tiền</label>
                    <input type="text" name="price" class="form-control" placeholder="Nhập giá sản phẩm..." value="{{ $variant->price }}">
                    @error('price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Gía khuyến mãi</label>
                    <input type="text" name="price_khuyen_mai" class="form-control" placeholder="Nhập giá khuyến mãi sản phẩm..." value="{{ $variant->price_khuyen_mai }}">
                    @error('price_khuyen_mai')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Ngày bắt đầu khuyến mãi</label>
                    <input type="date" min="2024-11-01" name="start_date" class="form-control" value="{{ $variant->start_date }}">
                    @error('start_date')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Ngày kết thúc khuyến mãi</label>
                    <input type="date" min="2024-11-01" name="end_date" class="form-control" value="{{ $variant->end_date }}">
                    @error('end_date')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Hình ảnh</label>
                    <input class="form-control" type="file" name="image_main" accept="image/*">
                    <img src="{{ Storage::url($variant->image_main) }}" alt="" width="80">
                    @error('image_main')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="1"
                            @if($variant->status == 1)
                                checked
                            @endif
                        >
                        <label class="form-check-label" for="flexRadioDefault1">
                            Hiển thị sản phẩm
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="0"
                            @if($variant->status == 0)
                                checked
                            @endif
                        >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Ẩn sản phẩm
                        </label>
                    </div>
                </div>
                <div>
                    <button class="btn btn-success" type="submit">Cập nhật</button>
                    <a href="#"><button class="btn btn-danger" type="button">Hủy</button></a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection