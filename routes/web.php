<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
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

Route::get('/', function () {
    return view('pages.login');
});
Route::get('/dashbord', function () {
    return view('dashbord');
});
Route::get('/register', function () {
    return view('pages.register');
});

Route::resource('banners', BannerController::class);
// Route::get('bannerlist', [BannerController::class, 'index']);
// Route::get('destroy', [BannerController::class, 'destroy']);
Route::get('addbanner', [BannerController::class, 'create']);
Route::get('showbanner', [HomeController::class, 'viewbanner']);