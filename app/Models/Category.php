<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // breakfast/lunner/dinner/brunch
    protected $fillable = ['type'];

    // Relationship: A category has many recipes
    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
