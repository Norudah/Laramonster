<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Monster extends Model
{
    use HasFactory;

    protected $fillable = ["name", "description", "type", "height", "isDead", "diet",
    "health", "attack", "defense", "speed", "faction", "user_id"];

    public function gears() {
        return $this->belongsToMany(Gear::class, 'monster_gear');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
