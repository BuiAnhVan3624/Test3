<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Variant;
use App\Models\Category;

class ProductController extends Controller
{
    public function detailProduct($id) {
        $product = Product::with('variant')->findOrFail($id);
        $variant = Variant::all();
        return view('client.detail')->with([
            'product' => $product,
            'variant' => $variant
        ]);
    }

}
