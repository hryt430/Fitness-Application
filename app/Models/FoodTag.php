<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FoodTag extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Foodとの多対多関係
    public function food(): BelongsToMany{
        return $this->belongsToMany(Food::class)->withTimestamps();
    }
}