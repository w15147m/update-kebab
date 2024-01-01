<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\frontend\ABOUT_UScontroller;
use APP\Http\Controllers\frontend\CONTACT_UScontroller;
use APP\Http\Controllers\frontend\HOMEcontroller;
use APP\Http\Controllers\frontend\KEBAB_HUTcontroller;
use APP\Http\Controllers\frontend\wellcomeHutcontroller;
use App\Http\Controllers\shops\ShopsController;
use App\Http\Controllers\website\HomeController as WebsiteHomeController;

// Route::get('/', [wellcomeHutcontroller::class,'index']);


Route::get('/', function () {
    return view('user.wellcomeHut');
});


Route::get('/home', [WebsiteHomeController::class, 'index']);
Route::get('/menu', function () {
    return view('user.KEBAB_HUT');
});
Route::get('/about', function () {
    return view('user.ABOUT_US');
});
Route::get('/contact', function () {
    return view('user.CONTACT_US');
});
Route::get('/order', function () {
    return view('user.ORDER_ONLINE');
});


// admin routes***************************************************
// ****************************************
// Route::get('/', function () {
//     return view('admin.index');
// });
Route::prefix('admin')->group(function () {


    Route::prefix('menu')->group(function () {   
    Route::get('/menu', function () {
        return view('admin.menu.menu');
    });

    Route::get('/add', function () {
        return view('admin.menu.add_menu');
    });
});

Route::prefix('shops')->group(function () {
        Route::get('/shops', function () {
            return view('admin.shops.shops');
        });
        Route::get('/add', function () {
            return view('admin.shops.add_shops');
        });
        Route::post('/shops', [ShopsController::class, 'insert']);
});




});