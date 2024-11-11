@extends('layout.admin.default')
@section('main')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách danh mục</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button type="button" class="btn btn-secondary btn-sm" onclick="">Chọn tất cả</button>
            <button type="button" class="btn btn-secondary btn-sm" onclick="">Bỏ chọn tất cả</button>
            <button type="submit" name="xoacacmucchon" class="btn btn-secondary btn-sm">Xóa các mục đã chọn</button>
            <a href="{{ route('categories.addCategory') }}"><button type="button" class="btn btn-secondary btn-sm">Nhập thêm</button></a>
            <div class="float-right">
                <div class="input-group">
                    <input type="text" class="form-control" name="" placeholder="Tìm kiếm...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th></th>
                            <th>STT</th>
                            <th>Tên thương hiệu</th>
                            <th>Hình ảnh</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $key => $value)
                        <tr>
                            <td class="col-1 text-center"><input type="checkbox" name="" value=""></td>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td class="text-center">
                                <img src="{{ Storage::url($value->image) }}" alt="" width="80px">
                            </td>
                            <td></td>
                            <td>
                                <a href="{{ route('categories.updateCategory', $value->id) }}"><button class="btn btn-warning">Sửa</button></a>
                                <form action="{{ route('categories.deleteCategory') }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" value="{{ $value->id }}" name="id">
                                    <button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection