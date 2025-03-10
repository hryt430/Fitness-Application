<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function recipe(): belongsToMany {
        return $this->belongsToMany(Food::class)->withTimestamps();
    }
}
