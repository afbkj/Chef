<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgetPassword;
use App\Http\Controllers\ProfileController;

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

//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['auth', 'verified'])->name('dashboard');

 Route::middleware('auth')->group(function () {
     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 });

 require __DIR__.'/auth.php';

Route::get("/", [HomeController::class, "index"]);


Route::get("/redirects", [HomeController::class, "redirects"]);

Route::get("/users", [AdminController::class, "user"]);
Route::get("/deletemenu/{id}", [AdminController::class, "deletemenu"]);
Route::get("/foodmenu", [AdminController::class, "foodmenu"]);
Route::post("/uploadfood", [AdminController::class, "upload"]);

Route::get("/deleteuser/{id}", [AdminController::class, "deleteuser"]);

Route::get("/updateview/{id}", [AdminController::class, "updateview"]);

Route::post("/update/{id}", [AdminController::class, "update"]);


Route::post("/reservation", [AdminController::class, "reservation"]);
Route::get("/viewreservation", [AdminController::class, "viewreservation"]);

Route::get("/viewchef", [AdminController::class, "viewchef"]);

Route::post("/uploadchef", [AdminController::class, "uploadchef"]);


Route::get("/updatechef/{id}", [AdminController::class, "updatechef"]);

Route::post("/updatefoodchef/{id}", [AdminController::class, "updatefoodchef"]);

Route::get("/deletechef/{id}", [AdminController::class, "deletechef"]);

Route::post("/addcart/{id}", [HomeController::class, "addcart"]);

Route::get("/showcart/{id}", [HomeController::class, "showcart"]);

Route::get("/remove/{id}", [HomeController::class, "remove"]);

Route::post("/orderconfirm", [HomeController::class, "orderconfirm"]);

Route::get("/orders", [AdminController::class, "orders"]);

Route::get("/search", [AdminController::class, "search"]);






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

