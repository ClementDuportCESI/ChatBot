<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/produits', ProductController::class . "@index")->name("home.index");
Route::get('/produits/{product}', ProductController::class . "@show")->name("product.show");

Route::get('/admin/produits', ProductController::class . "@index")->name("product.index");
Route::get('/admin/produits/modifier/{product}', ProductController::class . "@edit")->name("product.edit");
Route::put('/admin/produits/modifier/{product}', ProductController::class . "@update")->name("product.update");
Route::get('/admin/produits/ajouter', ProductController::class . "@create")->name("product.create");
Route::post('/admin/produits/store', ProductController::class . "@store")->name("product.store");
Route::delete('/admin/produits/{product}', ProductController::class . "@destroy")->name("product.destroy");
Route::get('/admin/produits-recherche}', ProductController::class . "@search")->name("product.search");

