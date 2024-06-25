<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Product extends Pivot
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'image'];

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

}
