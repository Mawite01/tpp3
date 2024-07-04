<?php

namespace App\Http\Controllers\Api\Category;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CateogryContoller extends Controller
{
    public function index()
    {
        $category = Category::all();

        return CategoryResource::collection($category);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category = Category::create($request->all());
        
        return new CategoryResource($category);
    }

    public function show($id)
    {
        $category = Category::find($id);

        return new CategoryResource($category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'name' => $request->name
        ]);

        return new CategoryResource($category);
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return new CategoryResource($category);
    }
}
