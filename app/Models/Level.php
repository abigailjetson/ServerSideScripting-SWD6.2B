<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    // difficulty(easy/medium/hard)
    protected $fillable = ['mealDifficulty'];

    // Relationship: A level has many recipes
    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
