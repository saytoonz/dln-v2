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
Route::get('supreme-resources', [FrontController::class, 'supremeResources']);

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

//Site settings
Route::get('site-setting', [AdminController::class, 'settings']);
Route::post('add-settings', [CRUDController::class, 'insertData']);
Route::post('update-settings/{id}', [CRUDController::class, 'updateData']);

//Site Pages
Route::get('site-pages', [AdminController::class, 'sitePages']);

//Add news
Route::get('add-news', [AdminController::class, 'addNews']);
Route::post('post-news', [CRUDController::class, 'insertData']);
Route::get('view-news', [AdminController::class, 'viewNews']);
Route::get('edit-news/{id}', [AdminController::class, 'editNews']);
Route::post('update-news/{id}', [CRUDController::class, 'updateData']);

//Shared  APIs
Route::post('multiple-delete', [AdminController ::class, 'multipleDelete']);
Route::get('delete-api/{tbl}/{id}', [AdminController::class, 'deleteWithApi']);
Route::get('update-api/{tbl}/{id}/{field}/{value}', [AdminController::class, 'updateWithApi']);

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
Route::get('edit-advert/{id}', [AdminController::class, 'editAdv']);
Route::post('update-advert/{id}', [CRUDController::class, 'updateData']);


//Happilex
Route::get('add-happilex',  [AdminController::class, 'addHappilex']);
Route::post('add-happilex-category', [CRUDController::class, 'insertData']);
Route::post('post-happilex', [CRUDController::class, 'insertData']);
Route::get('view-happilex',  [AdminController::class, 'viewHappilex']);
Route::get('edit-happilex/{id}',  [AdminController::class, 'editHappilex']);
Route::post('update-happilex/{id}', [CRUDController::class, 'updateData']);

//Opinions and Features
Route::get('add-opinions-features', [AdminController::class, 'addOpinion']);
Route::post('post-opinions', [CRUDController::class, 'insertData']);
Route::get('view-opinions-features', [AdminController::class, 'viewOpinions']);
Route::get('edit-opinions/{id}', [AdminController::class, 'editOpinions']);
Route::post('update-opinions/{id}', [CRUDController::class, 'updateData']);

Route::get('opinions-cats', [AdminController::class, 'viewOpinionCat']);
Route::post('add-opinions-category', [CRUDController::class, 'insertData']);
Route::get('opinions-edit-category/{id}', [AdminController::class, 'editOpinionCat']);
Route::post('update-opinions-category/{id}', [CRUDController::class, 'updateData']);

//Law firms
Route::get('law-firms', [AdminController::class, 'lawFirms']);
Route::get('add-law-firms', [AdminController::class, 'addLawFirms']);
Route::get('edit-law-firm/{id}', [AdminController::class, 'editLawFirms']);
Route::post('post-law_firms', [CRUDController::class, 'insertData']);
Route::post('update-firm/{id}', [CRUDController::class, 'updateData']);



//Legal Works
Route::get('add-legal_work', [AdminController::class, 'addLegal']);
Route::post('post-legal_work', [CRUDController::class, 'insertData']);
Route::get('view-legal_work', [AdminController::class, 'viewLegal']);
Route::get('edit-legal_work/{id}', [AdminController::class, 'editLegal']);
Route::post('update-legal_work/{id}', [CRUDController::class, 'updateData']);


Route::get('add-page', [AdminController::class, 'addPage']);
Route::post('post-page', [CRUDController::class, 'insertData']);
Route::post('update-page/{id}', [CRUDController::class, 'updateData']);
Route::get('view-page', [AdminController::class, 'viewLegal']);


Route::get('add-store-product', [AdminController::class, 'addProduct']);
Route::get('view-store-products', [AdminController::class, 'viewProducts']);
Route::post('add-store-category', [CRUDController::class, 'insertData']);
Route::get('edit-product/{id}', [AdminController::class, 'editProduct']);
Route::post('update-product/{id}', [CRUDController::class, 'updateData']);
