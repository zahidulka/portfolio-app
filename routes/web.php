<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempController;

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

Route::get('/',[TempController::class, 'index']);
Route::get('/about',[TempController::class, 'about']);
Route::get('/experience',[TempController::class, 'experience']);
Route::get('/projects',[TempController::class, 'projects']);