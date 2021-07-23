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
        $pouet = [0=>'pouet',1=>'truc',2=>'machin',3=>'chouette'];
        $arrayMonster = [];
        $clashs = 
        [
            'fights' => Fight::all(),
            'users' => User::all(),
            'arenas' => Arena::all(),
            'monsters' => Monster::all(),
            'pouet' => $pouet,
        ];    
        
        foreach($clashs['fights'] as $fight)
        {
        
            $monster1 = Monster::where('id' , $fight->monster_first_id)->get();
            $monster2 = Monster::where('id' , $fight->monster_second_id)->get();
            $arenas = Arena::where('id' , $fight->arena_id)->get();

            $arenas = $arenas[0]->name;
            

            $users = [];
            $monstres = [];
            
            foreach($monster1 as $firstMonster)
            {
                $users[] = $firstMonster->user;
                $monstres[] = $firstMonster->name;
            }

            foreach($monster2 as $secondMonster)
            {   
                $users[] = $secondMonster->user;
                $monstres[] = $secondMonster->name;
            }

            
            $fight->users = $users;
            $fight->monsters = $monstres;
            $fight->arenas = $arenas;

            

               
        }

        return view('fight.list' , $clashs);
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
        //areneID
        $arenaFight = Arena::where('name' , $request->arena)->first();

        $fight = new Fight;
        $fight->arena_id = $arenaFight->id;
        $fight->monster_first_id = $monsterUser1->id;
        $fight->monster_second_id = $monsterUser2->id;
        $fight->save();

        return redirect('fights')->with('succces', 'Combat ajouter!');
    }
}
