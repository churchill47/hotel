<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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



Route::get("/",[HomeController::class,"index"]);

Route::get("/users",[AdminController::class,"user"]);
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

/*route of food details*/

Route::post("/uploadfood",[AdminController::class,"upload"]);
Route::get("/deletefood/{id}",[AdminController::class,"deletefood"]);
Route::get("/editfood/{id}",[AdminController::class,"editfood"]);
Route::get("/foodmenu",[AdminController::class,"foodmenu"]);
Route::put("/editfood/{id}",[AdminController::class,"update"]);


/*route of reservation details*/

Route::post("/reservation",[AdminController::class,"reservation"]);
Route::get("/reservationlist",[AdminController::class,"reservationlist"]);
Route::get("/deletereservation/{id}",[AdminController::class,"deletereservation"]);


/*route of chief details*/

Route::get("/viewchef",[AdminController::class,"viewchef"]);
Route::post("/uploadchef",[AdminController::class,"uploadchef"]);
Route::get("/deletechef/{id}",[AdminController::class,"deletechef"]);
Route::put("/updatechef/{id}",[AdminController::class,"updatechef"]);
Route::get("/editchef/{id}",[AdminController::class,"editchef"]);



Route::get("/redirects",[HomeController::class,"redirects"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
