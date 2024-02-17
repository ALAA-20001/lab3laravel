<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//List all users
Route::get('users', [UserController::class, 'index']) ->name('users.index');

//Create user
Route::get('users/create', [UserController::class, 'create']) ->name('users.create');
Route::post('users', [UserController::class, 'store']) ->name('users.store');

//Show user

Route::get('users/{user}', [UserController::class, 'show']) ->name('users.show') ->where('user', '[0-9]+');

//Update user
Route::get('users/{user}/edit', [UserController::class,'edit']) ->name('users.edit');
Route::put('users/{user}', [UserController::class,'update']) ->name('users.update');

//Delete user
Route::delete('users/{user}', [UserController::class,'destroy']) ->name('users.destroy');

Route::resource('posts', PostController::class);


Route::fallback(function(){
    return redirect('/');
});
