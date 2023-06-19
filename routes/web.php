<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AdminMiddleware;
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

Route::group([
    'controller' => IndexController::class,
    'as' => 'page.'
], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/register', 'register')->name('register');
    Route::get('/login', 'login')->name('login');
});

Route::group([
    'controller' => AuthController::class,
    'as' => 'auth.',
    'prefix' => '/auth'
], function () {
    Route::post('/register', 'createUser')->name('createUser');
    Route::post('/login', 'loginUser')->name('loginUser');
    Route::get('/logout', 'logoutUser')->name('logoutUser');
});

Route::group([
    'controller' => AdminController::class,
    'as' => 'admin.',
    'prefix' => '/admin',
    'middleware' => ['auth', AdminMiddleware::class]
], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/product/create', 'createProduct')->name('createProduct');
    Route::get('/category/create', 'addCategory')->name('addCategory');
    Route::post('/category/create', 'createCategory')->name('createCategory');
    Route::delete('/category/delete/{category:id}', 'deleteCategory')->name('deleteCategory');



    Route::group([
        'controller' => ProductController::class,
        'as' => 'product.',
        'prefix' => '/product'
    ], function () {
       Route::post('/create', 'createProduct')->name('createProduct');
       Route::put('/update', 'updateProduct')->name('updateProduct');
       Route::delete('/delete/{product:id}', 'deleteProduct')->name('deleteProduct');
    });
});
