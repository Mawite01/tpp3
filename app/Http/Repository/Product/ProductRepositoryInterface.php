<?php

namespace App\Http\Repository\Product;

interface ProductRepositoryInterface
{
    public function get();

    public function findById($id);
}