<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/site', function () {
    return view('website.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Land
Route::prefix('home')->group(function () {


    Route::get('/', 'AccountController@index');



});

Route::group(['middleware' => ['auth']], function () {

    Route::prefix('home/porojo')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('porojo');
        Route::get('/create', [PostController::class, 'create'])->name('create_porojo');
        Route::post('/store', [PostController::class, 'storePorojo']);
    });
});

