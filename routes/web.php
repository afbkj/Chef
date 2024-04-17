<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgetPassword;
use App\Http\Controllers\ProfileController;
use App\Livewire\Admin\AdminAddCouponComponent;
use App\Livewire\Admin\AdminCouponsComponent;
use App\Livewire\Admin\AdminEditCouponComponent;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\Auth\ForgotPasswordController;


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

Route::get("/showcart/{id}", [HomeController::class, "showcart"])->name('show.cart');
Route::get('/show-orders', [HomeController::class,'showorder'])->name('showorder');;

Route::get("/foodchef", [HomeController::class, "foodchef"]);

Route::get("/remove/{id}", [HomeController::class, "remove"]);

Route::post("/orderconfirm", [HomeController::class, "orderconfirm"]);

Route::get("/orders", [AdminController::class, "orders"]);

Route::get("/search", [AdminController::class, "search"]);

Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');

Route::delete('/deleteorder/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');

Route::delete('/reservations/{id}', [ReservationsController::class, 'destroy'])->name('reservations.destroy');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');


Route::controller(\App\Http\Controllers\CouponController::class)->group(function() {
    Route::get('coupon', 'index')->name('admin.coupon');
    Route::get('coupon/create', 'create')->name('admin.coupon-create');
    Route::post('coupon', 'store')->name('admin.coupon-insert');
    Route::get('coupon/edit/{id}', 'edit');
    Route::put('coupon/{id}', 'update')->name('admin.coupon-update');
    Route::get('coupon/delete/{id}', 'destroy');
});





// Route::get("/admin/coupons", AdminCouponsComponent::class)->name("admin.coupons");
// Route::get("/admin/coupon/add", AdminAddCouponComponent::class)->name("admin.addcoupon");
// Route::get("admin/coupon/edit/{coupon_id}", AdminEditCouponComponent::class)->name('admin.editcoupon');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

