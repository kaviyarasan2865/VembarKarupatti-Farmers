<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.addProduct');
    }

    public function store(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'image' => 'required|image|max:2048',
        'image2' => 'nullable|image|max:2048',
        'image3' => 'nullable|image|max:2048',
    ]);

    // Handle file uploads
    $imagePaths = [];

    if ($request->hasFile('image')) {
        $imagePaths['image'] = $request->file('image')->store('products', 'public');
    }
    if ($request->hasFile('image2')) {
        $imagePaths['image2'] = $request->file('image2')->store('products', 'public');
    }
    if ($request->hasFile('image3')) {
        $imagePaths['image3'] = $request->file('image3')->store('products', 'public');
    }

    // Create a new product record
    $productData = [
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'stock' => $request->stock,
    ];

    // Add image paths to the product data if they exist
    if (isset($imagePaths['image'])) {
        $productData['image'] = $imagePaths['image'];
    }
    if (isset($imagePaths['image2'])) {
        $productData['image2'] = $imagePaths['image2'];
    }
    if (isset($imagePaths['image3'])) {
        $productData['image3'] = $imagePaths['image3'];
    }

    // Create a new product record
    $product = Product::create($productData);

    // Redirect to a success page or route
    return redirect()->back()->with('success', 'Product added successfully!');
}

public function viewProducts(){
    $products=Product::all();
    return view('admin.viewProducts',compact('products'));
}

public function editProduct($id){
    $product = Product::findOrFail($id);
    // dd($product);
    return view('admin.editProduct', compact('product'));
}
}
