<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\PageController;

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactController;





// Client-side Routes
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::post('/comment', [PageController::class, 'comment'])->name('comment');

Route::get('/fare', [PageController::class, 'fare'])->name('fare');
Route::get('/get-data-for-ajax/{days}', [PageController::class, 'getDataForAjax'])->name('getDataForAjax');

Route::get('/playground', [PageController::class, 'playground'])->name('playground');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'postContact'])->name('postContact');
Route::get('/policy', [PageController::class, 'policy'])->name('policy');


// Authentication
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('CheckLogout');
Route::post('/login', [loginController::class, 'postLogin'])->name('postLogin');
Route::get('/register', [loginController::class, 'register'])->middleware('CheckLogout')->name('register');
Route::post('/register', [loginController::class, 'postRegister'])->middleware('CheckLogout')->name('postRegister');
Route::post('/logout', [loginController::class, 'getLogout'])->name('getLogout');


// User Cart
Route::get('/cart', [PageController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [PageController::class, 'addToCart'])->name('addToCart');




// Server-side Routes
Route::prefix('admin')->name('admin.')->middleware(['CheckLogin','CheckAdmin'])->group(function(){
    Route::get('/', function(){
        return view('admin.pages.index');
    });
    Route::redirect('/index', '/admin');

    //MEMBER ROUTES
    Route::prefix('member')->name('member.')->group(function(){
        // show list member
        Route::get('/', [MemberController::class, 'index'])->name('index');
        Route::get('index', [MemberController::class, 'index'])->name('index');

        // create member
        Route::get('create', [MemberController::class, 'create'])->name('create'); // show form to create member
        Route::post('store', [MemberController::class, 'store'])->name('store'); //set action in form to insert

        //edit member
        Route::get('edit/{id}', [MemberController::class, 'edit'])->name('edit')->where('id', '[0-9]+'); //show form to edit member
        Route::post('update/{id}', [MemberController::class, 'update'])->name('update')->where('id', '[0-9]+');// set action in form to edit member

        // delete member
        Route::get('delete/{id}', [MemberController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
    });



    // PRODUCT ROUTES
    Route::prefix('product')->name('product.')->group(function(){
        // show list product
        Route::get('index', [ProductController::class, 'index'])->name('index');

        Route::get('text-ajax', [ProductController::class, 'textAjax'])->name('textAjax');
        Route::get('getDataForAjax', [ProductController::class, 'getDataForAjax'])->name('getDataForAjax');
        // create product
        Route::get('create', [ProductController::class, 'create'])->name('create'); // show form to create product
        Route::post('store', [ProductController::class, 'store'])->name('store'); //set action in form to insert

        //edit product
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit')->where('id', '[0-9]+'); //show form to edit product
        Route::post('update/{id}', [ProductController::class, 'update'])->name('update')->where('id', '[0-9]+');// set action in form to edit product

        // delete product
        Route::get('delete/{id}', [ProductController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
    });


    Route::prefix('comment')->name('comment.')->group(function(){
        // show list category
        Route::get('index', [CommentController::class, 'index'])->name('index');

        // delete category
        Route::get('delete/{id}', [CommentController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
    });

    Route::prefix('contact')->name('contact.')->group(function(){
        // show list category
        Route::get('index', [ContactController::class, 'index'])->name('index');

        // delete category
        Route::get('delete/{id}', [ContactController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
    });


});
