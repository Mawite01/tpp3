<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CateogryContoller extends Controller
{

    public function index()
    {
        $category = Category::all();
        
        return view('category.index', compact('category'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('categoryIndex');
    }

    public function edit(Category $data)
    {
        return view('category.edit', compact('data'));
    }

    public function update(Request $request, Category $data)
    {
        $data->update([
            'name' => $request->name
        ]);

        return redirect()->route('categoryIndex');
    }

    public function delete(Category $data)
    {
       $data->delete();
       
       return redirect()->route('categoryIndex');
    }
}
