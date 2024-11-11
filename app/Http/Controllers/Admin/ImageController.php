<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Variant;
use App\Models\Product;

class ImageController extends Controller
{
    public function addImage() {
        $product = Product::select('id', 'name')->get();
        

        $variant = Variant::select('id', 'color')->get();
        return view('admin.image.add')->with([
            'product' => $product,
            'variant' => $variant
        ]);
    }

    public function testImage() {
        $variant = Variant::select('id', 'color')->get();
        return view('admin.image.add')->with([
            'variant' => $variant
        ]);
    }
}
