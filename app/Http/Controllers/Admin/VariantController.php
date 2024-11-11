<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Variant;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\VariantRequest;

class VariantController extends Controller
{
    public function listVariant() {
        $list = Variant::get();
        return view('admin.variant.list')->with([
            'list' => $list
        ]);
    }

    public function addVariant() {
        $product = Product::select('id', 'name')->get();
        return view('admin.variant.add')->with([
            'product' => $product
        ]);
    }

    public function addPostVariant(VariantRequest $request) {
        $imagePath = "";
        if($request->hasFile('image_main')) {
            $image = $request->file('image_main');
            $newName = time() . "." . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('image-product', $newName, 'public');
        }

        $data = [
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'color' => $request->color,
            'price' => $request->price,
            'price_khuyen_mai' => $request->price_khuyen_mai,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'image_main' => $imagePath,
            'status' => $request->status
        ];

        Variant::create($data);
        return redirect()->route('variants.listVariant');
    }

    public function updateVariant($id) {
        $variant = Variant::findOrFail($id);
        $product = Product::select('id', 'name')->get();
        return view('admin.variant.update')->with([
            'variant' => $variant,
            'product' => $product
        ]);
    }

    public function updatePutVariant(VariantRequest $request, $id) {
        $variant = Variant::findOrFail($id);

        $imagePath = $variant->image_main;
        if($request->hasFile('image_main')) {
            if($variant->image != null) {
                File::delete(public_path(Storage::url($variant->image_main)));
            }
            $image = $request->file('image_main');
            $newName = time() . "." . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('image-variant', $newName, 'public');
        }

        $data = [
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'color' => $request->color,
            'price' => $request->price,
            'price_khuyen_mai' => $request->price_khuyen_mai,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'image_main' => $imagePath,
            'status' => $request->status
        ];

        $variant->update($data);
        return redirect()->route('variants.listVariant');
    }

    public function deleteVariant(Request $request) {
        $variant = Variant::where('id', $request->id)->first();
        if($variant->image_main != null) {
            File::delete(public_path(Storage::url($variant->image_main)));
        }
        $variant->delete();
        return redirect()->route('variants.listVariant');
    }
}
