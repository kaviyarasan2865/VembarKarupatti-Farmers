<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'loginVerify'])->name('login');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add.product');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/view-products', [ProductController::class, 'viewProducts'])->name('view.products');
    Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit.product');
    Route::post('/update-product/{id}', [ProductController::class, 'updateProduct'])->name('update.product');
    Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete.product');
});


Route::group(['prefix' => 'user'], function () {
    Route::get('/signup', [UserController::class, 'signup'])->name('user.signup');
    Route::get('/register', [UserController::class, 'register'])->name('register.user');
    Route::get('/login', [UserController::class, 'login'])->name('user.login');
});
