<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monster;
use App\Models\User;

class MonsterController extends Controller
{
   function index()
   {
      $monsters = Monster::all();
      return view('monsters.list', ['monsters' => $monsters]);
   }

   function update (Request $request)
   {
       $monster = Monster::find($request->id);
       return view('monsters.updateMonster', ['monster' => $monster]);
   }

   function add (Request $request)
   {
        $monster = new Monster();

        $validated = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
            'diet' => 'required',
            'faction' => 'required',
        ]);
    
        $monster->name = $request->name;
        $monster->type = $request->type;
        $monster->height = random_int(100, 200);
        $monster->isDead = 0;
        $monster->description = $request->description;
        $monster->diet = $request->diet;
        $monster->health = random_int(80, 100);
        $monster->attack = random_int(20, 40);
        $monster->defense = random_int(10, 25);
        $monster->speed = random_int(1, 3);
        $monster->faction = $request->faction;
        $monster->user_id = \Auth::id();
        $monster->fight_id = NULL;

        $monster->save();
        return redirect()->route('monsters');
   }


   function save (Request $request)
   {
       $monster = Monster::find($request->id);
       $monster->name = $request->name;
       $monster->description = $request->description;
       $monster->faction = $request->faction;
       $monster->save();

       return redirect('monsters');
   }

   function delete (Request $request)
   {
       $monster = Monster::find($request->id);
       $monster->delete();
       return redirect('monsters')->with('status', 'Monster deleted ! ');
   }

}