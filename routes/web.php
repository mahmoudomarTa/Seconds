<?php

use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\dashboard\CommentController;
use App\Http\Controllers\dashboard\FeatureController;
use App\Http\Controllers\dashboard\MessageContoller;
use App\Http\Controllers\ecomerce\ProductController;
use App\Http\Controllers\ecommerce\CategoryController;
use App\Http\Controllers\ecommerce\SubCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\landing_page\LandingPageController;
use App\Http\Helpers;
use Illuminate\Support\Facades\Auth;
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

////Auth::routes();
//
//
//
//Route::prefix('admin')->name('admin.')->group(function(){
//
//    Route::middleware(['guest:admin'])->group(function(){
//        Route::view('/login','admin.dashboard.admin.login')->name('login');
//        Route::post('/check',[AdminController::class,'check'])->name('check');
//    });
//
////    Route::middleware(['auth:admin'])->group(function(){
//////        Route::get('/home', [HomeController::class, 'index'])->name('home');
////        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
////    });
//
//});


Route::view('admin/login', 'admin.dashboard.admin.login')->middleware(['guest:admin']);
Route::post('admin/check', [AdminController::class, 'check'])->middleware(['guest:admin']);
Route::get('admin/dashboard/home/{local}', [HomeController::class, 'index'])->middleware(['auth:admin']);
Route::post('admin/logout', [AdminController::class, 'logout'])->middleware(['auth:admin']);



//
//
Route::get('admin/home/{local}', [HomeController::class, 'index'])->middleware(['auth:admin']);
Route::post('home/update', [HomeController::class, 'update'])->middleware(['auth:admin']);

Route::get('index/{local}',[LandingPageController::class,'index'])->middleware(['auth:admin']);
Route::get('twitter/{local}',[LandingPageController::class,'twitter'])->middleware(['auth:admin']);
Route::post('message/store',[LandingPageController::class,'storeMessage'])->middleware(['auth:admin']);


Route::get('feature/index/{local}',[FeatureController::class,'index'])->middleware('auth:admin');
Route::get('feature/create/{local}',[FeatureController::class,'create'])->middleware('auth:admin');
Route::post('feature/store',[FeatureController::class,'store'])->middleware('auth:admin');
Route::get('feature/edit/{local}/{id}',[FeatureController::class,'edit'])->middleware('auth:admin');
Route::post('feature/update/{id}',[FeatureController::class,'update'])->middleware('auth:admin');
Route::get('feature/delete/{id}',[FeatureController::class,'destroy'])->middleware('auth:admin');

Route::get('comment/index/{local}',[CommentController::class,'index'])->middleware('auth:admin');
Route::get('comment/create/{local}',[CommentController::class,'create'])->middleware('auth:admin');
Route::post('comment/store',[CommentController::class,'store'])->middleware('auth:admin');
Route::get('comment/edit/{local}/{id}',[CommentController::class,'edit'])->middleware('auth:admin');
Route::post('comment/update/{id}',[CommentController::class,'update'])->middleware('auth:admin');
Route::get('comment/delete/{id}',[CommentController::class,'destroy'])->middleware('auth:admin');

Route::get('message/index/{local}',[MessageContoller::class,'index'])->middleware('auth:admin');
Route::get('message/delete/{id}',[MessageContoller::class,'destroy'])->middleware('auth:admin');

Route::get('admin/index/{local}',[AdminController::class,'index'])->middleware('auth:admin');
Route::get('admin/create/{local}',[AdminController::class,'create'])->middleware('auth:admin');
Route::post('admin/store',[AdminController::class,'store'])->middleware('auth:admin');
Route::get('admin/edit/{local}/{id}',[AdminController::class,'edit'])->middleware('auth:admin');
Route::post('admin/update/{id}',[AdminController::class,'update'])->middleware('auth:admin');
Route::get('admin/delete/{id}',[AdminController::class,'destroy'])->middleware('auth:admin');


Route::group(['prefix'=>'admin'],function (){
    if (Helpers::can('categories')) {
        Route::get('categories', [CategoryController::class, 'index']);
        Route::get('categories/create', [CategoryController::class, 'create']);
        Route::post('categories/store', [CategoryController::class, 'store']);
        Route::get('categories/{id}/edit', [CategoryController::class, 'edit']);
        Route::post('categories/{id}/update', [CategoryController::class, 'update']);
        Route::get('categories/{id}/delete', [CategoryController::class, 'destroy']);
    }

    if (Helpers::can('sub_categories')) {
        Route::get('{category_id}/sub-categories', [SubCategoryController::class, 'index']);
        Route::get('{category_id}/sub-categories/create', [SubCategoryController::class, 'create']);
        Route::post('{category_id}/sub-categories/store', [SubCategoryController::class, 'store']);
        Route::get('sub-categories/{sub_cat_id}/edit', [SubCategoryController::class, 'edit']);
        Route::post('sub-categories/{id}/update', [SubCategoryController::class, 'update']);
        Route::get('sub-categories/{id}/delete', [SubCategoryController::class, 'delete']);
    }


    if (Helpers::can('products')) {
        Route::get('{sub_category_id}/products', [ProductController::class, 'index']);
        Route::get('product/create', [ProductController::class, 'create']);
        Route::post('product/store', [ProductController::class, 'store']);
        Route::get('product/edit', [ProductController::class, 'edit']);
        Route::post('product/update/{id}', [ProductController::class, 'update']);
        Route::get('product/delete/{id}', [ProductController::class, 'delete']);
    }


});



