<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public function characters()
    {
        return $this->hasMany(Character::class);
    }

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function language()
    {
        return $this->belongsTo(Languages::class);
    }
    
}
