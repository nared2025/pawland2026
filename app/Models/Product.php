<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'stock',
        'type',
        'image',
        'description',
    ];

  
    public function getImageUrlAttribute()
    {
        return 'https://pub-ef41dcc750a041ce9bac4f3337e6e4a7.r2.dev/' . $this->image;
    }
}
