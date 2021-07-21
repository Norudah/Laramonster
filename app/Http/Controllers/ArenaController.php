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

    public function addArena(Request $request)
    {       
       $arena = new Arena;
       $arena->name = $request->nom;
       $arena->localisation = $request->localisation; 
       $arena->save();
       
       return redirect('arena')->with('success', 'Arene est rajouter!');;
    }

    public function deleteArena(Request $request)
    {       
        ddd('oui');
        $arena = new Arena;
        $arena->id = $request->id;
        $arena->delete();
        $arena->save();
       return redirect('arena')->with('success', 'Arene est rajouter!');;
    }
}
