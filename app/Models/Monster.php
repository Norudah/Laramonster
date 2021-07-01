<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    use HasFactory;
    public function gears() {
        return $this->belongsToMany(Gear::class, 'monster_gear');
    }
}
