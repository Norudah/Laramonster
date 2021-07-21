<?php

namespace App\Http\Controllers;

use App\Models\Arena;
use Illuminate\Http\Request;

class ArenaController extends Controller
{
    public function index()
    {
    return view('arena.list', [
        'arenas' => Arena::all()
    ]);
    }
}
