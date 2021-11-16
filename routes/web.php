<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SiteSettingController;
use App\Models\SiteSetting;
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
//    $settings = SiteSetting::find(1)->get();

//    return view('welcome', ['settings' => $settings]);
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('/posts')->middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/', [PostController::class, 'index'])->name('all-posts');
    Route::get('/view/{post}',[PostController::class, 'singlePost'])->name('list-posts');
    Route::get('/view/{post}/delete', [PostController::class, 'destroy'])->name('delete-comment');
});
Route::prefix('/products')->middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('products');
//    Route::get('/view/{post}',[PostController::class, 'singlePost'])->name('list-posts');
//    Route::get('/view/{post}/delete', [PostController::class, 'destroy'])->name('delete-comment');
});

Route::prefix('/settings')->middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/', [SiteSettingController::class, 'index'])->name('settings');
//    Route::get('/view/{post}',[PostController::class, 'singlePost'])->name('list-posts');
//    Route::get('/view/{post}/delete', [PostController::class, 'destroy'])->name('delete-comment');
});
Route::prefix('/projects')->middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/', [ProjectController::class, 'index'])->name('projects');
});
