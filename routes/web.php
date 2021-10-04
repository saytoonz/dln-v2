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
Route::get('article/{slug}', [FrontController::class, 'article']);
Route::get('general-news/{slug}', [FrontController::class, 'generalNews']);
Route::get('search-content', [FrontController::class, 'searchContent']);
Route::post('add-comment', [CRUDController::class, 'insertData']);
Route::get('add-like/{news_id}', [FrontController::class, 'addLike']);
Route::get('add-dislike/{news_id}', [FrontController::class, 'addDisLike']);

Route::get('supreme-courtdiary', [FrontController::class, 'courtDairy']);
Route::get('supreme-justices', [FrontController::class, 'supremeJustices']);

//Pages
Route::get('page/{slug}', [FrontController::class, 'page']);



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

//Shared  APIs
Route::get('delete-api/{tbl}/{id}', [AdminController::class, 'deleteWithApi']);

//Supreme Court
Route::get('court-dairy', [AdminController::class, 'courtDairy']);
Route::post('add-dairy', [CRUDController::class, 'insertData']);
Route::get('court-justices', [AdminController::class, 'justices']);
Route::post('add-justice', [CRUDController::class, 'insertData']);
Route::get('court-history', [AdminController::class, 'history']);
Route::post('add-history', [CRUDController::class, 'insertData']);
Route::get('court-resources', [AdminController::class, 'courtResources']);
Route::post('add-resource', [CRUDController::class, 'insertData']);
Route::post('add-resource-cats', [CRUDController::class, 'insertData']);


//Advertisements
Route::get('add-adv', [AdminController::class, 'addAdv']);
Route::post('add-advert', [CRUDController::class, 'insertData']);
Route::get('all-advs', [AdminController::class, 'allAdv']);

