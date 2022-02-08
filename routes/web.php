<?php

use Illuminate\Support\Facades\Route;
/* use App\Http\Controllers\Admin\FrontendController;*/
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [FrontendController::class, 'index'])->name('frontHome');;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard','Admin\FrontendController@index')->name('admin.dashboard');

    Route::get('categories', 'Admin\CategoryController@index');

    Route::get('add-category', 'Admin\CategoryController@add');

    Route::post('insert-category',[CategoryController::class,'insert'])->name('category.insert');
    
    Route::get('edit-category/{category}', [CategoryController::class, 'edit'])->name('category.edit');

    Route::get('update-category/{category}', [CategoryController::class, 'update'])->name('category.update');

    Route::get('delete-category/{category}', [CategoryController::class, 'destroy'])->name('category.delete');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');

    Route::get('/create', [ProductController::class, 'create'])->name('products.create');

    Route::post('/store', [ProductController::class, 'store'])->name('products.store');

    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');

    Route::get('/update/{product}', [ProductController::class, 'update'])->name('products.update');

    Route::get('/delete/{product}', [ProductController::class, 'destroy'])->name('products.delete');

});
 