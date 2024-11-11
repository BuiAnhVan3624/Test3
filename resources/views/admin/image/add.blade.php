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
        <h1 class="h3 mb-0 text-gray-800">Thêm ảnh sản phẩm</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="post" class="form" enctype="multipart/form-data">
                @csrf
                <form method="" action="">
                    <div class="mb-3">
                        <label class="form-label">Sản phẩm</label>
                        <select name="product_id" onchange="this.form.submit()">
                            <option value="" selected>-- Lựa chọn --</option>
                            @foreach($product as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                        @error('product_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </form>

                <div class="mb-3">
                    <label class="form-label">Màu sắc</label>

                    @
                    <select name="variant_id">
                        <option value="" selected>-- Lựa chọn --</option>
                        @foreach($variant as $value)
                        <option value="{{ $value->id }}">{{ $value->color }}</option>
                        @endforeach
                    </select>
                    @error('variant_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Hiển thị sản phẩm
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="0">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Ẩn sản phẩm
                        </label>
                    </div>
                </div>
                <div>
                    <button class="btn btn-success" type="submit">Thêm mới</button>
                    <a href="#"><button class="btn btn-danger" type="button">Hủy</button></a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection