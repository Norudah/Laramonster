<?php

namespace App\Http\Controllers;

use App\Models\Fight;
use Illuminate\Http\Request;

class FightController extends Controller
{
    public function index()
    {
        return view('fight.list', [
            'fights' => Fight::all()
        ]);
    }
}
