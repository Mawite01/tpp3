<?php

namespace App\Http\Services\Product;

use App\Models\Product;

class ProductService
{

    public function uploadImage($image)
    {
        $file = $image;
        $imageName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('image', $imageName);
        
    }
}