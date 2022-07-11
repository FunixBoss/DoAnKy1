<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\LoginController;

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
//login
Route::get('/login', [LoginController::class, 'login'])->name('login');


// Server-side Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [PageController::class, 'adminAction']);
    Route::redirect('/index', '/admin');
    //MEMBER ROUTES
    Route::prefix('member')->name('member.')->group(function () {
        // show list member 
        Route::get('/', [MemberController::class, 'index'])->name('index');
        Route::get('index', [MemberController::class, 'index'])->name('index');

        // create member
        Route::get('create', [MemberController::class, 'create'])->name('create'); // show form to create member
        Route::post('store', [MemberController::class, 'store'])->name('store'); //set action in form to insert

        //edit member
        Route::get('edit/{id}', [MemberController::class, 'edit'])->name('edit')->where('id', '[0-9]+'); //show form to edit member
        Route::post('update/{id}', [MemberController::class, 'update'])->name('update')->where('id', '[0-9]+'); // set action in form to edit member

        // delete member
        Route::get('delete/{id}', [MemberController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
    });



    // PRODUCT ROUTES
    // Route::prefix('product')->name('product.')->group(function () {
    //     // show list product 
    //     Route::get('index', [ProductController::class, 'index'])->name('index');

    //     Route::get('text-ajax', [ProductController::class, 'textAjax'])->name('textAjax');
    //     Route::get('getDataForAjax', [ProductController::class, 'getDataForAjax'])->name('getDataForAjax');
    //     // create product
    //     Route::get('create', [ProductController::class, 'create'])->name('create'); // show form to create product
    //     Route::post('store', [ProductController::class, 'store'])->name('store'); //set action in form to insert

    //     //edit product
    //     Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit')->where('id', '[0-9]+'); //show form to edit product
    //     Route::post('update/{id}', [ProductController::class, 'update'])->name('update')->where('id', '[0-9]+'); // set action in form to edit product

    //     // delete product
    //     Route::get('delete/{id}', [ProductController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
    // });


    // // CATEGORY ROUTES
    // Route::prefix('category')->name('category.')->group(function () {
    //     // show list category 
    //     Route::get('index', [CategoryController::class, 'index'])->name('index');

    //     // create category
    //     Route::get('create', [CategoryController::class, 'create'])->name('create'); // show form to create category
    //     Route::post('store', [CategoryController::class, 'store'])->name('store'); //set action in form to insert

    //     //edit category
    //     Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit')->where('id', '[0-9]+'); //show form to edit category
    //     Route::post('update/{id}', [CategoryController::class, 'update'])->name('update')->where('id', '[0-9]+'); // set action in form to edit category

    //     // delete category
    //     Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
    // });
});
