<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CateogryContoller extends Controller
{

    public function index()
    {
        $data = [
            [
                'Mark',
                'Otto',
                '20'
            ],
            [
                'Jacob',
                'Thornton',
                '40'
            ],
            [
                'Larry',
                'the Bird',
                '30'
            ]
        ];
       
        return view('category.index', compact('data'));
    }

    // public function result()
    // {
    //     return view('category.result');
    // }
}
