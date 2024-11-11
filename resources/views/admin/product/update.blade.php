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
        <h1 class="h3 mb-0 text-gray-800">Chỉnh sửa sản phẩm</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('products.updatePutProduct', $product->id ) }}" method="post" class="form" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm..." value="{{ $product->name }}">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Môt tả</label>
                    <textarea class="form-control" rows="3" placeholder="Nhập mô tả sản phẩm..." name="description">{{ $product->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Thương hiệu</label>
                    <select name="category_id">
                        <option value="" selected>-- Lựa chọn --</option>
                        @foreach($category as $value)
                        <option value="{{ $value->id }}"
                            @if($value->id == $product->category_id)
                                selected
                            @endif
                        >
                            {{ $value->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="1"
                            @if($product->status == 1) 
                                checked
                            @endif
                        >
                        <label class="form-check-label" for="flexRadioDefault1">
                            Hiển thị sản phẩm
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="0"
                            @if($product->status == 0) 
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