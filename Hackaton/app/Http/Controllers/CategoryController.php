<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function list(Request $request): View
    {
    }
    public function new(Request $request): View
    {

        return view('category.new');
    }
    public function create(StoreCategoryRequest $request)
    {

        $category = new Category([

            'name' => $request->input('name'),

        ]);

        $category->save();
        return redirect()->route('category.list');
    }

    public function edit(Request $request, int $id): View
    {
        $category = Category::findOrFail($id);

        return view('category.edit', compact('category'));
    }
    public function update(UpdateCategoryRequest $request, int $id)
    {
        $category = Category::findOrFail($id);

        $category->update([
            'name' => $request->name,

        ]);
        $category->save();

        return redirect()->route('category.list');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('category.list')->with('success', 'Category Deleted');;
    }
}
