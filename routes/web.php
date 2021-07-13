<?php

use App\Models\Film;
use App\Models\Director;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\DirectorController;

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

// Route::get('/', function () {
//     $directors = Director::all();
//     foreach ($directors as $director) {
//         echo "Director name:" . $director['name'] . "<br>";
//         echo "Film name:" . $director->film['name'] . "<br>";
//         echo '-------------------------------' . "<br>";
//     }

//     $films = Film::all();
//     foreach ($films as $film) {
//         echo "Film name:" . $film['name'] . "<br>";
//         echo "Director name:" . $film->director['name'] . "<br>";
//         echo '-------------------------------' . "<br>";
//     }
// });
Route::resource('films', FilmController::class);
Route::resource('directors', DirectorController::class);
