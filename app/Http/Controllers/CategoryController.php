<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Display a listing of the categories.
    public function index()
    {
        $categories = Category::all();
        return view('layouts.categories.index', compact('categories'));
    }

    // Show the form for creating a new category.
    public function create()
    {
        return view('layouts.categories.create');
    }

    // Store a newly created category in the database.
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        // Create a new category
        Category::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('layouts.categories.index')->with('success', 'Category created successfully');
    }

    // Display the specified category.
    public function show(Category $category)
    {
        return view('layouts.categories.show', compact('category'));
    }

    // Show the form for editing the specified category.
    public function edit(Category $category)
    {
        return view('layouts.categories.edit', compact('category'));
    }

    // Update the specified category in the database.
    public function update(Request $request, Category $category)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        // Update the category
        $category->update([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('layouts.categories.index')->with('success', 'Category updated successfully');
    }

    // Remove the specified category from the database.
    public function destroy(Category $category)
    {
        // Delete the category
        $category->delete();

        return redirect()->route('layouts.categories.index')->with('success', 'Category deleted successfully');
    }
}
