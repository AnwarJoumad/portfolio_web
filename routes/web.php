<?php

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
})->name('welcome');

Route::get('/aboutme', function(){
   return view('aboutme');
})->name('aboutme');

Route::get('/hobby', function (){
   return view('hobby');
})->name('hobby');

Route::get('/werkervaring', function (){
    return view('werkervaring');
})->name('werkervaring');

Route::get('/project', function (){
    return view('project');
})->middleware(['auth'])->name('project');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'dashboard', 'middelware' => 'auth'], function() {
  Route::resource('project', \App\Http\Controllers\ProjectController::class);
});
require __DIR__.'/auth.php';
