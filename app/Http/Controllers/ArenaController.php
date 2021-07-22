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
       
       return redirect('arena')->with('success', 'Arene est rajouter!');
    }

    public function deleteArena($id)
    {
        if(!empty($id)){
            $arena = Arena::find($id);
            $arena->delete();
            return redirect('arena')->with('success', $arena->name.' à été supprimer!');
        }else{
            return redirect('arena')->with('error', 'ID manquant!');
        }
    }

    public function updateArena($id){

        return view('arena.update', [
            'arenas' => Arena::find($id)
        ]);
    }

    public function updateArenaStats($id, Request $request)
    {
        $arena = Arena::find($id);
        $arena->name = $request->nom;
        $arena->localisation = $request->localisation; 
        $arena->save();

        return redirect('arena')->with('success', $arena->name.' à été modifier!');
    }
}
