<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function listCategory() {
        $list = Category::get();
        return view('admin.category.list')->with([
            'list' => $list
        ]);
    }

    public function addCategory() {
        return view('admin.category.add');
    }

    public function addPostCategory(CategoryRequest $request) {
        $imagePath = "";
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $newName = time() . "." . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('image-category', $newName, 'public');
        }

        $data = [
            'name' => $request->name,
            'image' => $imagePath,
            'status' => $request->input('status')
        ];

        Category::create($data);
        return redirect()->route('categories.listCategory')->with([
            'success' => 'Thêm thành công'
        ]);
    }

    public function updateCategory($id) {
        $category = Category::findOrFail($id);
        return view('admin.category.update')->with([
            'category' => $category
        ]);
    }

    public function updatePutCategory(CategoryRequest $request, $id) {
        $category = Category::where('id', $id)->first();

        $imagePath = $category->image;
        if($request->hasFile('image')) {
            if($category->image != null) {
                File::delete(public_path(Storage::url($category->image)));
            }
            $image = $request->file('image');
            $newName = time() . "." . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('image-category', $newName, 'public');
        }

        $data = [
            'name' => $request->name,
            'image' => $imagePath,
            'status' => $request->input('status')
        ];

        $category->update($data);
        return redirect()->route('categories.listCategory')->with([
            'success' => 'Sửa thành công'
        ]);
    }

    public function deleteCategory(Request $request) {
        $category = Category::where('id', $request->id)->first();
        if($category->image != null) {
            File::delete(public_path(Storage::url($category->image)));
        }
        $category->delete();
        return redirect()->route('categories.listCategory')->with([
            'success' => 'Xóa thành công'
        ]);
    }
}


