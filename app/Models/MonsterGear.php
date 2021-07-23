<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class MonsterGear extends Model
{
    use HasFactory;

    protected $fillable = ["monster_id", "gear_id"];

    public function gears() {
        return $this->belongsToMany(Gear::class, 'gear_id');
    }

    public function monsters() {
        return $this->belongsToMany(Monster::class, 'monster_id');
    }
}
