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

}