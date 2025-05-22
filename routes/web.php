<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test',function(){
//     return "Hello Laravel";
// });

// Route::get('/login',function(){
//     return "Login Page";
// });
// Route::get('/landing_page',function(){
//     return "Landing page";
// });

Route::resource('tasks',TaskController::class);