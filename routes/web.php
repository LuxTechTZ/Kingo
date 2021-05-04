<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index']);


Route::get('/site', function () {
    return view('website.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Land
Route::prefix('home')->group(function () {


    Route::get('/', function (){
         return view('dashboard');

    });


});

Route::group(['middleware' => ['auth']], function () {

    Route::prefix('home/porojo')->group(function () {
        Route::get('/', [PostController::class, 'porojo'])->name('porojo');
        Route::get('/create', [PostController::class, 'createPorojo'])->name('create_porojo');
        Route::post('/store', [PostController::class, 'storePorojo']);
    });

    Route::prefix('home/domokaya')->group(function () {
        Route::get('/', [PostController::class, 'domokaya'])->name('domokaya');
        Route::get('/create', [PostController::class, 'createDomokaya'])->name('create_domokaya');
        Route::post('/store', [PostController::class, 'storeDomokaya']);
    });
});
