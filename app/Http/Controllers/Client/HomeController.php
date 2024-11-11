<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Variant;
use App\Models\Category;

class HomeController extends Controller
{
    public function index() {
        $products = Product::with('variant')->get();
        $newProduct = Product::orderBy('created_at','DESC')->take(5)->get();

        return view('client.index')->with([
            'products' => $products,
            'newProduct' => $newProduct
        ]);
    }

}
