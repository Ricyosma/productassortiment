<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'title',
        'articleNumber',
        'description',
        'category_id',
        'articlePhoto'
    ];

public function Category()
{
    return $this->hasMany(Category::class);
}

}

