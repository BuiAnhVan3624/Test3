<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function listProduct() {
        $list = Product::get();
        return view('admin.product.list')->with([
            'list' => $list
        ]);
    }

    public function addProduct() {
        $category = Category::select('id', 'name')->get();
        return view('admin.product.add')->with([
            'category' => $category
        ]);
    }

    public function addPostProduct(ProductRequest $request) {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'status' => $request->input('status')
        ];

        Product::create($data);
        return redirect()->route('products.listProduct')->with([
            'success' => 'Thêm thành công'
        ]);
    }

    public function updateProduct($id) {
        $product = Product::findOrFail($id);
        $category = Category::select('id', 'name')->get();
        return view('admin.product.update')->with([
            'product' => $product,
            'category' => $category
        ]);
    }

    public function updatePutProduct(ProductRequest $request, $id) {
        $product = Product::findOrFail($id);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'status' => $request->input('status')
        ];

        $product->update($data);
        return redirect()->route('products.listProduct')->with([
            'success' => 'Sửa thành công'
        ]);
    } 

    public function deleteProduct(Request $request) {
        $product = Product::where('id', $request->id)->first();
        $product->delete();
        return redirect()->route('products.listProduct')->with([
            'success' => 'Xóa thành công'
        ]);
    }
}
