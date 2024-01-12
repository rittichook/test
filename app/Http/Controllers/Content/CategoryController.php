<?php

namespace App\Http\Controllers\Content;
use App\Models\ContentCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $rows = ContentCategory::all();
        return view('content.category.list-category');
    }

    // Show the form for creating a new category
    public function create()
    {
        return view('categories.create');
    }

    // Store a newly created category in the database
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'category_name' => 'required|string|max:255',
            // 'status' => 'required|boolean',
        ]);

        ContentCategory::create($request->all());
        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }

    // Show the specified category
    public function show(ContentCategory $category)
    {
        return view('categories.show', compact('category'));
    }

    // Show the form for editing the specified category
    public function edit(ContentCategory $category)
    {
        return view('categories.edit', compact('category'));
    }

    // Update the specified category in the database
    public function update(Request $request, ContentCategory $category)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    // Remove the specified category from the database
    public function destroy(ContentCategory $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');

    }
}
