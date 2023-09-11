<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Retrieve all categories from the database
        return view('layouts.categories', compact('categories'));
    }
    
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
        ]);

        // Create a new category
        Category::addCat($request->input('name'));

        return redirect()->route('categories.index')
            ->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        // Retrieve the category for editing and return the edit view
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
        ]);

        // Update the category with the new data
        $category->modCat($request->input('name'));

        return redirect()->route('categories.index')
            ->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        // Delete the category
        $category->delCat();

        return redirect()->route('categories.index')
            ->with('success', 'Category deleted successfully.');
    }

    // ...
}
