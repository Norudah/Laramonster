<?php

namespace App\Http\Controllers;

use App\Models\Gear;
use Illuminate\Http\Request;

class GearController extends Controller
{
    function index() {
        $gears = Gear::all();
        return view('gears.list', ['gears' => $gears]);
    }

    function add(Request $request) {
        
        $gear = new Gear();
        
        $gear->isWeapon = $request->isWeapon;
        $gear->name = $request->name;
        $gear->value = $request->value;
        $gear->material = $request->material;
        $gear->type = $request->type;
        $gear->category = $request->category;

        $gear->save();

        // dd($request["isWeapon"]);
     }  
    
}
