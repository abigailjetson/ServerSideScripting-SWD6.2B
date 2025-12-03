<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['recipename', 'description', 'ingredients', 'instructions', 'category_id', 'cuisine_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cuisine()
    {
        return $this->belongsTo(Cuisine::class);
    }
}
