<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index']);

Route::get('details', function () {
    return view('frontend.details');
});


Route::get('category', function () {
    return view('frontend.category');
});



Route::get('admin', function () {
    return view('backend.index');
});



//Site tabs /Categories
Route::get('site-tabs', [AdminController::class, 'viewTabs']);
Route::post('add-category', [CRUDController::class, 'insertData']);
Route::get('edit-category/{id}', [AdminController::class, 'editCategory']);
Route::post('update-category/{id}', [CRUDController::class, 'updateData']);
Route::post('multiple-delete', [AdminController ::class, 'multipleDelete']);
//Site settings
Route::get('site-setting', [AdminController::class, 'settings']);
Route::post('add-settings', [CRUDController::class, 'insertData']);
Route::post('update-settings/{id}', [CRUDController::class, 'updateData']);

//Add news
Route::get('add-news', [AdminController::class, 'addNews']);
Route::post('post-news', [CRUDController::class, 'insertData']);
Route::get('view-news', [AdminController::class, 'viewNews']);
Route::get('edit-news/{id}', [AdminController::class, 'editNews']);
Route::post('update-news/{id}', [CRUDController::class, 'updateData']);
