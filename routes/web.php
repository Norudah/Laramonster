<?php

use App\Http\Controllers\ArenaController;
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


Route::get('/monster/update/{id}',
    [MonsterController::class, 'update']
)->middleware(['auth'])->name('update');

Route::post('/monster/save',
    [MonsterController::class, 'save']
)->middleware(['auth'])->name('save');

Route::get('/monster/delete/{id}',
    [MonsterController::class, 'delete']
)->middleware(['auth'])->name('delete');

Route::get('/gears', function () {
    return view('gears.list');
})->middleware(['auth'])->name('gears');

//ARENA ROUTE
Route::get('/arena', [ArenaController::class, 'index'])->middleware(['auth'])->name('arena');
Route::post('/arena/add', [ArenaController::class, 'addArena'])->middleware(['auth'])->name('add');
Route::delete('/arena/delete', [ArenaController::class, 'deleteArena'])->middleware(['auth'])->name('delete');



Route::get('/lol',function() {
    $gear = Gear::find(1);
    $monster = Monster::find(1);

    $obj = $gear;
    ddd($obj->monsters);
});

require __DIR__.'/auth.php';
