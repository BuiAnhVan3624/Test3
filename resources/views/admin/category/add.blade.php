@extends('layout.admin.default')
@section('main')

@push('styles')
<style>

</style>
@endpush

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm thương hiệu mới</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="post" class="form" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Tên thương hiệu</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên thương hiệu..." value="{{ old('name') }}">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Hình ảnh</label>
                    <input class="form-control" type="file" name="image" accept="image/*">
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Còn nhập hàng
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="0">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Dừng hợp tác
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