<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketControllerList;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('user/list',[UserController::class,'list'])->name('user.list');;
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('ticket/add',[TicketController::class,'add'])->name('ticket.add');;
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('ticket/list',[TicketControllerlist::class,'list'])->name('ticket.list');;
});
