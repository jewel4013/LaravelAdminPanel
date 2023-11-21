<?php

use App\Http\Controllers\admin\adminControl;
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

Route::prefix('/admin')->group(function(){
    Route::match(['get', 'post'], 'login', [adminControl::class, 'login']);
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard', [adminControl::class, 'layout']);
        Route::get('logout', [adminControl::class, 'logout']);
    });
});
