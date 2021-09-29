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
Route::group(['middleware' => ['web']], function () {

    Route::get('/', [SiteController::class, 'index']);
    Route::get('/category/{category}', [SiteController::class, 'category'])->name('site_category');
    Route::get('/post/{name}/{id}', [SiteController::class, 'post'])->name('site_post');
    Route::get('/my_post/{id}/{name}', [SiteController::class, 'myPost'])->name('my_post');
    Route::get('/single_post/{id}/{name}', [SiteController::class, 'singlePost'])->name('single_post');

    Route::get('/search', [PostController::class, 'search'])->name('search');
    Route::get('/like/{id}', [PostController::class, 'like'])->name('like');
});

Route::get('/site', function () {
    return view('website.index');
});

Route::get('/register', function () {
    return redirect()->route('login');
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

    Route::get('/home/post/show/{id}', [PostController::class, 'showPost'])->name('post');
    Route::post('/home/post/store', [PostController::class, 'store'])->name('store_post');
    Route::get('/home/create/{caregory}', [PostController::class, 'create'])->name('create_post');
    Route::get('/home/post/edit/{id}', [PostController::class, 'editPost'])->name('edit_post');
    Route::post('/home/post/update/{id}', [PostController::class, 'update'])->name('update_post');
    Route::get('/home/post/delete/{id}', [PostController::class, 'destroy'])->name('delete_post');


    Route::get('/home/mjue_maarufu', [PostController::class, 'mjueMaarufu'])->name('mjue_maarufu');
    Route::get('/home/video', [PostController::class, 'video'])->name('video');
    Route::get('/home/riwaya', [PostController::class, 'riwaya'])->name('riwaya');
    Route::get('/home/kingo_katuni', [PostController::class, 'kingoKatuni'])->name('kingo_katuni');
    Route::get('/home/methali', [PostController::class, 'methali'])->name('methali');

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

    Route::prefix('home/porojo_live')->group(function () {
        Route::get('/', [PostController::class, 'porojoLive'])->name('porojo_live');
        Route::get('/create', [PostController::class, 'createDomokaya'])->name('create_domokaya');
        Route::post('/store', [PostController::class, 'storeDomokaya']);
    });
});
