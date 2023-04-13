<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Lead;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\HomeController;
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

//на главную
Route::get('/', [MainController::class, 'index'])->name('home.index');


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' =>'admin', 'middleware' => 'admin'], function(){
    Route::group(['namespace' => 'Lead'], function(){
        Route::get('/', IndexController::class)->name('admin.lead.index');
        Route::patch('/lead/{lead}', UpdateController::class)->name('admin.lead.update');
    });
    Route::group(['namespace' => 'Area'], function(){
        Route::get('/area', IndexController::class)->name('admin.area.index');
        Route::patch('/area/{area}', UpdateController::class)->name('admin.area.update');
        Route::post('/area/', StoreController::class)->name('admin.area.store');
        Route::delete('/area/{area}', DestroyController::class)->name('admin.area.delete');
    });
});

Route::group(['namespace' => 'App\Http\Controllers\Lead'], function(){
    Route::get('/leads', IndexController::class)->name('lead.index');
    Route::get('/leads/create', CreateController::class)->name('lead.create');
    Route::post('/leads', StoreController::class)->name('lead.store');
    Route::get('/leads/{lead}', ShowController::class)->name('lead.show');
    Route::get('/leads/{lead}/edit', EditController::class)->name('lead.edit');
    Route::patch('/leads/{lead}', UpdateController::class)->name('lead.update');
    Route::delete('/leads/{lead}', DestroyController::class)->name('lead.delete');
});


//Простые страницы
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/info', [InfoController::class, 'index'])->name('info.index');
Route::get('/price', [PriceController::class, 'index'])->name('price.index');



//Авторизация
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
