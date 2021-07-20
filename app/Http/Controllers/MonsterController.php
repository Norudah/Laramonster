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

}