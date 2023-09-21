<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


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



Route::get('/login', function () {
    return view('login');
})->name('login');;

Route::middleware(['admin'])->group(function () {
    Route::get('/test', function () {
        return 123;
    });
});
Route::post('/gzfhdhzdg', [ProductController::class, 'store'])->name('products.store');
// Temporarily disable middleware
Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/hello', function () {
    return view('layouts.modals');
});

// Route for displaying products and handling product actions
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/add', [ProductController::class, 'add'])->name('products.add');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/delete/{product}', 'ProductController@destroy')->name('products.delete');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');