<?php

use App\Http\Controllers\ArenaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonsterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GearController;
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

// MONSTER
Route::get('/monsters', [MonsterController::class, 'index'])->middleware(['auth'])->name('monsters');
Route::get('/monster/update/{id}', [MonsterController::class, 'update'])->middleware(['auth'])->name('update');
Route::post('/monster/save', [MonsterController::class, 'save'])->middleware(['auth'])->name('save');
Route::post('/monster/add', [MonsterController::class, 'add'])->middleware(["auth"])->name('monster-add');
Route::get('/monster/monster-add-gear/{id}', [MonsterController::class, 'addGear'])->middleware(["auth"])->name('monster-add-gear');
Route::get('/monster/delete/{id}', [MonsterController::class, 'delete'])->middleware(['auth'])->name('delete');

// Gears
Route::get('/gears', [GearController::class, 'index'])->middleware(["auth"])->name('gears');
Route::post('/gears/add', [GearController::class, 'add'])->middleware(["auth"])->name('gear-add');
Route::get('/gears/delete/{id}', [GearController::class, 'delete'])->middleware(["auth"])->name('gear-delete');
Route::get('/gears/modify/{id}', [GearController::class, 'modify'])->middleware(["auth"])->name('gear-modify');
Route::post('/gears/modify/{id}', [GearController::class, 'modifyPersist'])->middleware(["auth"])->name('gear-modify-persist');

//ARENA ROUTE
Route::get('/arena', [ArenaController::class, 'index'])->middleware(['auth'])->name('arena');
Route::post('/arena/add', [ArenaController::class, 'addArena'])->middleware(['auth'])->name('add-arena');
Route::get('/arena/delete/{id}', [ArenaController::class, 'deleteArena'])->middleware(['auth'])->name('delete-arena');
Route::get('/arena/update/{id}', [ArenaController::class, 'updateArena'])->middleware(['auth'])->name('update-arena');
Route::get('/arena/update/stats/{id}', [ArenaController::class, 'updateArenaStats'])->middleware(['auth'])->name('update-arena-stats');

// Users
Route::get('/users', [UserController::class, 'index'])->middleware(["auth"])->name('users');
Route::get('/users/delete/{id}', [UserController::class, 'delete'])->middleware(["auth"])->name('user-delete');
Route::get('/users/modify/{id}', [UserController::class, 'modify'])->middleware(["auth"])->name('user-modify');
Route::post('/users/modify/{id}', [UserController::class, 'modifyPersist'])->middleware(["auth"])->name('user-modify-persist');

// Fight
Route::get('/fights', [UserController::class, 'index'])->middleware(["auth"])->name('fights');


Route::get('/lol',function() {
    $gear = Gear::find(1);
    $monster = Monster::find(1);

    $obj = $gear;
    ddd($obj->monsters);
});

require __DIR__.'/auth.php';
