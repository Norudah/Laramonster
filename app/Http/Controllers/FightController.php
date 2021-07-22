<?php

namespace App\Http\Controllers;

use App\Models\Fight;
use App\Models\User;
use App\Models\Monster;
use App\Models\Arena;
use Illuminate\Http\Request;

class FightController extends Controller
{
    public function index()
    {
        return view('fight.list', [
            'fight' => Fight::all(),
            'users' => User::all(),
            'arenas' => Arena::all()
        ]);
    }

    public function addFight(Request $request) {
        
        // user1
        $user1 = User::where('name', $request->user1)->first();
        //monstre du user1
        $monsterUser1 = Monster::where('user_id',$user1->id)->first();

        // user2
        $user2 = User::where('name', $request->user2)->first();
        //monstre du user2
        $monsterUser2 = Monster::where('user_id',$user2->id)->first();

        $arenaFight = Arena::where('name' , $request->arena)->first();

        $fight = new Fight;
        $fight->arena_id = $arenaFight->id;




        

        // $arena->name = $request->nom;


        

    
        // return redirect('arena')->with('success', 'Arene est rajouter!');
    }
}
