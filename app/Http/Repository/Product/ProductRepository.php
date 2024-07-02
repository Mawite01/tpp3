<?php

namespace App\Http\Repository\Product;

use App\Models\Category;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function get()
    {
        return Product::all();
    }


    public function findById($productId)
    {
        return Product::find($productId);
    }

    public function create($data)
    {
        return Product::create($data);
    }
}