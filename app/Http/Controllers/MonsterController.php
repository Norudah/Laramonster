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
        $gear = new Gear();
            
        $gear->isWeapon = $request->isWeapon;
        $gear->name = $request->name;
        $gear->value = $request->value;
        $gear->material = $request->material;
        $gear->type = $request->type;
        $gear->category = $request->category;

        $gear->save();
        return redirect()->route("gears");
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