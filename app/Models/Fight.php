<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{
    use HasFactory;

    public function monsters() {
        return $this->hasMany(Monster::class, "monster_id");
    }

    public function arenas() {
        return $this->belongsTo(Arena::class, "arena_id");
    }
}
