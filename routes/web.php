<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingController;

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

// comments/random 上から順番に実行されるため、randomを上に置かないと先にgreetByTimeのアクションが呼び出される
Route::get('/comments/random', [GreetingController::class, 'randomMessage']);

// comments/{greet}で出し分ける
Route::get('/comments/{param}', [GreetingController::class, 'greetByTime']);

// comments/freeword/{word}
Route::get('/comments/freeword/{message}', [GreetingController::class, 'freeMessage']);
