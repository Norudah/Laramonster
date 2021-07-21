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
        dd($request->request);
     }  
    
}
