<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CateogryContoller extends Controller
{

    public function index()
    {
        $data = Category::all();
        
        return view('category.index', compact('data'));
    }

}
