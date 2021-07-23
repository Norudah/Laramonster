<?php

namespace App\Http\Controllers;

use App\Models\Gear;
use Illuminate\Http\Request;

class GearController extends Controller
{

    public $categories = [
        "Léger" => "light",
        "Moyen" => "average",
        "Lourd" => "heavy"
    ];

    public $types = [
        "Estoc" => "estoc",
        "Tranchante" => "tranchante",
        "Contondante" => "contondante"
    ];

    function index() {
        $gears = Gear::all();
        return view('gears.list', ['gears' => $gears, "types" => $this->types, "categories" => $this->categories]);
    }

    function add(Request $request) {
        $gear = new Gear();
        
        $gear->isWeapon = $request->isWeapon;
        $gear->name = $request->name;
        $gear->value = $request->value;
        $gear->material = $request->material;
        $request->isWeapon === 1 ? $gear->type = $request->type : $gear->type = null;
        $gear->category = $request->category;

        $gear->save();
        return redirect()->route("gears");
    }

    function delete($id) {
       Gear::find($id)->delete();
       return redirect()->route("gears");
    }

    function modify($id) {
        $gear = Gear::find($id);
        return view("gears.modify", ["gear" => $gear, "types" => $this->types, "categories" => $this->categories]);
    }

    function modifyPersist(Request $request, $id) {
        $gear = Gear::find($id);
        
        $gear->isWeapon = $request->isWeapon;
        $gear->name = $request->name;
        $gear->value = $request->value;
        $gear->material = $request->material;
        $request->isWeapon === 1 ? $gear->type = $request->type : $gear->type = null;
        $gear->category = $request->category;

        $gear->save();
        return redirect()->route('gears');
    }

    
}
