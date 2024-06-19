<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Product; // Adjust the namespace as per your Product model's location

class HomeController extends Controller
{
    public function index()
    {
        // Fetch products with their descriptions limited
        $products = Product::latest()->get()->map(function ($product) {
            $product->description = Str::limit($product->description, 50, '...'); // Adjust the limit as per your requirement
            return $product;
        });

        return view('welcome', compact('products'));
    }
}
