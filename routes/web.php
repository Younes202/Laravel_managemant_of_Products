<?php

use App\Http\Controllers\Categories\CategorController;
use App\Http\Controllers\Clients\ClientController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Sellers\SellerController;
use App\Http\Controllers\Transactions\TransactionController;
use App\Http\Controllers\Users\UserController;
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

Route::Resource('Users',UserController::class)->except(['create','edit']);

Route::Resource('Clients',ClientController::class)->only(['index','show']);

Route::Resource('Products',ProductController::class)->only(['index','show']);

Route::Resource('Transactions',TransactionController::class)->only(['index','show']);

Route::Resource('Categories',CategorController::class)->except(['create','edit']);

Route::Resource('Sellers',SellerController::class)->only(['index','edit']);





