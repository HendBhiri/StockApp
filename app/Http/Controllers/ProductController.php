<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    // ...
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $products = Product::with('category')->get();
        return view('layouts.products', compact('products', 'categories'));
    }

    public function add()
    {
        return view('layouts.add-product');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'stock' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust as needed
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
        } else {
            $imagePath = null;
        }

        // Create a new product with image information
        Product::addProd(
            $request->input('name'),
            $request->input('category_id'),
            $request->input('stock'),
            $imagePath
        );

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        // Retrieve the product for editing and return the edit view
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'stock' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust as needed
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
        } else {
            $imagePath = $product->image; // Keep existing image if no new image is uploaded
        }

        // Update the product with the new data
        $product->update([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'stock' => $request->input('stock'),
            'image' => $imagePath,
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        // Delete the product
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }

}
