<?php

use App\Http\Controllers\ChatbotController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KeywordController;

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

Route::get('/', function () { return view('home.index'); })->name('home.index');


Route::post('/chatbot/search', ChatbotController::class . "@search")->name('chatbot.search');


Route::get('/produits/{product}', ProductController::class . "@show")->name("product.show");


Route::get('/admin/produits', ProductController::class . "@index")->name("product.index");
Route::get('/admin/produits/modifier/{product}', ProductController::class . "@edit")->name("product.edit");
Route::put('/admin/produits/modifier/{product}', ProductController::class . "@update")->name("product.update");
Route::get('/admin/produits/ajouter', ProductController::class . "@create")->name("product.create");
Route::post('/admin/produits/store', ProductController::class . "@store")->name("product.store");

Route::delete('/admin/produits/{product}', ProductController::class . "@destroy")->name("product.destroy");
Route::get('/admin/produits-recherche}', ProductController::class . "@search")->name("product.search");



Route::get('/admin/mots-cles', KeywordController::class . "@index")->name("keyword.index");
Route::get('/admin/mots-cles/modifier/{keyword}', KeywordController::class . "@edit")->name("keyword.edit");
Route::put('/admin/mots-cles/modifier/{keyword}', KeywordController::class . "@update")->name("keyword.update");
Route::get('/admin/mots-cles/ajouter', KeywordController::class . "@create")->name("keyword.create");
Route::post('/admin/mots-cles/store', KeywordController::class . "@store")->name("keyword.store");
Route::delete('/admin/mots-cles/{keyword}', KeywordController::class . "@destroy")->name("keyword.destroy");
Route::get('/admin/mots-cles-recherche}', KeywordController::class . "@search")->name("keyword.search");

