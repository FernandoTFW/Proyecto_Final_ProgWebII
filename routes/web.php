<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PurchaseDetailController;
use App\Http\Controllers\BranchController;

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

Route::get('/login', function () {
    return view('login.login');
});
Route::get('/index', function () {
    return view('main.index');
});
Route::get('/explorer', function () {
    return view('main.explorer');
});
Route::get('/cards', function () {
    return view('main.cards');
});

Route::get('/products', [ProductController::class, "getProducts"]);
Route::get('/products/editproduct{id}', [ProductController::class, "editProduct"]);
Route::get('/products/newproduct', [ProductController::class, "newProduct"]);
Route::get('/products/listproducts', [ProductController::class, "listProducts"]);
Route::get('/products/{id}', [ProductController::class, "getProduct"]);
Route::post('/products', [ProductController::class, "postProduct"]);
Route::put('/products', [ProductController::class, "putProduct"]);
Route::delete('/products/{id}', [ProductController::class, "deleteProduct"]);

Route::get('/clients', [ClientController::class, "getClients"]);
Route::get('/clients/editclient{id}', [ClientController::class, "editClient"]);
Route::get('/clients/newclient', [ClientController::class, "newClient"]);
Route::get('/clients/listclients', [ClientController::class, "listClients"]);
Route::get('/clients/{id}', [ClientController::class, "getClient"]);
Route::post('/clients', [ClientController::class, "postClient"]);
Route::put('/clients', [ClientController::class, "putClient"]);
Route::delete('/clients/{id}', [ClientController::class, "deleteClient"]);

Route::get('/purchases', [PurchaseController::class, "getPurchases"]);
Route::get('/purchases/newpurchase', [PurchaseController::class, "newPurchase"]);
Route::get('/purchases/{id}', [PurchaseController::class, "getPurchase"]);
Route::post('/purchases', [PurchaseController::class, "postPurchase"]);
Route::put('/purchases', [PurchaseController::class, "putPurchase"]);
Route::delete('/purchases/{id}', [PurchaseController::class, "deletePurchase"]);

Route::get('/purchaseDetails', [PurchaseDetailController::class, "getDetails"]);
Route::get('/purchaseDetails/{id}', [PurchaseDetailController::class, "getDetail"]);
Route::post('/purchaseDetails', [PurchaseDetailController::class, "postDetails"]);
Route::put('/purchaseDetails', [PurchaseDetailController::class, "putDetails"]);
Route::delete('/purchaseDetails/{id}', [PurchaseDetailController::class, "deletePurchaseDetail"]);

Route::get('/branchs', [BranchController::class, "getBranches"]);
Route::get('/branchs/editbranch{id}', [BranchController::class, "editBranch"]);
Route::get('/branchs/newbranch', [BranchController::class, "newBranch"]);
Route::get('/branchs/listbranchs', [BranchController::class, "listBranchs"]);
Route::get('/branchs/{id}', [BranchController::class, "getBranch"]);
Route::post('/branchs', [BranchController::class, "postBranch"]);
Route::put('/branchs', [BranchController::class, "putBranch"]);
Route::delete('/branchs/{id}', [BranchController::class, "deleteBranch"]);

