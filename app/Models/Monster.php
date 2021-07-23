<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Monster extends Model
{
    use HasFactory;

    protected $fillable = ["name", "description", "type", "height", "isDead", "diet",
    "health", "attack", "defense", "speed", "faction", "user_id", "fight_id"];

    public function monsterGear() {
        return $this->belongsToMany(MonsterGear::class, 'monster_gears');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fights() 
    {
        return $this->belongsTo(Fight::class, "fight_id");
    }
}
