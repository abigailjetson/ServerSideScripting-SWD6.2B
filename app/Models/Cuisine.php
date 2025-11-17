<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    use HasFactory;

    // asian/african/indian
    protected $fillable = ['genre'];

    // Relationship: A cuisine has many recipes
    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
