<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gear extends Model
{
    use HasFactory;
    public function monsters() {
        return $this->belongsToMany(Monster::class, 'monster_gear');
    }

    public function monsterGear()
    {
        return $this->belongsToMany(Monster::class, 'monster_gear');
    }
}
