<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{
    use HasFactory;

    public $monsters;

    public $users;

    public $arenas;

    public function arenas() {
        return $this->belongsTo(Arena::class, "arena_id");
    }
}
