<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ImageController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Route::resource('/blog', BlogController::class)->only(['index', 'show']);

Route::middleware('auth')->group(function()
{
    Route::resource('/posts', PostController::class);
    Route::resource('/addresses', AddressController::class);
    Route::resource('/images', ImageController::class);
});
