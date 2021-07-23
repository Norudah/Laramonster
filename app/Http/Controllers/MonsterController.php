<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monster;
use App\Models\User;
use App\Models\Gear;
use App\Models\MonsterGear;

class MonsterController extends Controller
{
   function index()
   {
      $monsters = Monster::all();
    //   $users = User::factory()->count(3)->create();
    //   $mons = Monster::factory()->count(4)->create();
      return view('monsters.list', ['monsters' => $monsters]);
   }

   function update (Request $request)
   {
        $monster = Monster::find($request->id);
        $gears = Gear::all();
       
        $monstergears = MonsterGear::where('monster_id', $request->id)->get();

        foreach($monstergears as $monstergear){
            $gearslist = Gear::where('id', $monstergear->gear_id)->get();
        }

        if($monstergears->isEmpty()){
            $select = [];
            foreach($gears as $gear){
                    $select[$gear->id] = $gear->name;
                }
        }else {
            foreach($monstergears as $monstergear){
                    $gears = Gear::where('id', $monstergear->gear_id)->get();
            }
            foreach($gears as $gear){
                if($gear->isWeapon == 1)
                {
                $gears = Gear::where('isWeapon', 0)->get();
                $select = [];
                foreach($gear as $gear){
                        $select[$gear->id] = $gear->name;
                }
                } else
                $gears = Gear::where('isWeapon', 1)->get();
                $select = [];
                foreach($gears as $gear){
                        $select[$gear->id] = $gear->name;
                }
            }
       }
       
       return view('monsters.updateMonster', ['monster' => $monster,
        'monstergears' => $monstergears, 'select' => $select,
        'gearslist' => $gearslist]);
   }

   function addGear (Request $request)
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
       $monstergears = new MonsterGear();
       $monster = Monster::find($request->id);
       $monster->name = $request->name;
       $monster->description = $request->description;
       $monster->faction = $request->faction;


       $monstergears->monster_id = $request->id;
       $monstergears->gear_id = $request->gear_id;
       $monstergears->save();


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