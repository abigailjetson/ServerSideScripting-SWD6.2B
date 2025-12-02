<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipeName',
        'ingredients',
        'instructions',
        'cooking_time',
        'category_id',
        'level_id',
        'cuisine_id',
    ];

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function cuisine()
    {
        return $this->belongsTo(Cuisine::class);
    }
}
