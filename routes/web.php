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

Route::get('community', [App\Http\Controllers\CommunityLinkController::class,'index']);
Route::post('community', [App\Http\Controllers\CommunityLinkController::class,'store']);

Route::get('/topyc/{name?}', function ($name = "Marvel") {
    return $name;
});

Route::match(array('GET', 'POST'),"/marvelCharacters", function () {
    return [
        [
            "name" => "Spiderman"
        ],
        [
            "name" => "Wolverine"
        ],
        [
            "name" => "Captain America"
        ],
        [
            "name" => "Hulk"
        ],
        [
            "name" => "Ant-Man"
        ],
        [
            "name" => "Thor"
        ],
    ];
});

Route::view('inicio', "home");

Route::get('/fecha', function () {

    return view("fecha", ["date" => with(null, function () {
        return [
            "Day" => date("d"),
            "Month" =>  date("m"),
            "Year" => date("y")
        ];
    })]);
});
