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
      // $users = User::factory()->count(3)->create();
      // $monsters = Monster::factory()->count(20)->create();
      return view('monsters.list', ['monsters' => $monsters]);
   }

   function update (Request $request)
   {
       $monster = Monster::find($request->id);
       return view('monsters.updateMonster', ['monster' => $monster]);
   }

   function add (Request $request)
   {
       return view('monsters.addMonster');
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