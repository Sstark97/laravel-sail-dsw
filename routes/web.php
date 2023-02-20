<?php

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

Auth::routes(['verify' => 'true']);
// Route::group(['middleware' => 'verified'], function (){

// })

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('community', [App\Http\Controllers\CommunityLinkController::class,'index'])->middleware("auth");
Route::post('community', [App\Http\Controllers\CommunityLinkController::class,'store'])->middleware("auth");
