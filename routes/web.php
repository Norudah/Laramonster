<?php

use App\Http\Controllers\GearController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonsterController;
use App\Models\Monster;
use App\Models\Gear;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Default routes

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Project routes

Route::get('/monsters',
[MonsterController::class, 'index']
)->middleware(['auth'])->name('monsters');

// Gears
Route::get('/gears', [GearController::class, 'index'])->middleware(["auth"])->name('gears');
Route::post('/gears/add', [GearController::class, 'add'])->middleware(["auth"])->name('gear-add');

Route::get('/arena', function () {
    return view('arena.list');
})->middleware(['auth'])->name('arena');



Route::get('/lol',function() {
    $gear = Gear::find(1);
    $monster = Monster::find(1);

    $obj = $gear;
    ddd($obj->monsters);
});

require __DIR__.'/auth.php';
