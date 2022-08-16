<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::prefix('/admin')->group(function() 
{
    Auth::routes();
    Route::get('/home',         [HomeController::class, 'index'])->name('admin.index');
    Route::get('/modal',        [HomeController::class, 'modal'])->name('modal.index');
    Route::get('/modal~demo',   [HomeController::class, 'modalDemo'])->name('modal.demo');
    Route::get('/tabs',         [HomeController::class, 'tabs'])->name('tabs.index');
    Route::get('/tabs~demo',    [HomeController::class, 'tabsDemo'])->name('tabs.demo');
});


