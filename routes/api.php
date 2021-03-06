<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Buyers
 */
Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']]);
Route::resource('buyers.transactions', 'Buyer\BuyerTransactionController', ['only' => ['index']]);
Route::resource('buyers.products', 'Buyer\BuyerProductController', ['only' => ['index']]);
Route::resource('buyers.sellers', 'Buyer\BuyerSellerController', ['only' => ['index']]);
Route::resource('buyers.categories', 'Buyer\BuyerCategoryController', ['only' => ['index']]);

/**
 * Categories
 */
Route::resource('categories', 'Category\CategoryController', ['except' => ['create', 'edit']]);
Route::resource('categories.buyers', 'Category\CategoryBuyerController', ['only' => ['index']]);
Route::resource('categories.sellers', 'Category\CategorySellerController', ['only' => ['index']]);
Route::resource('categories.products', 'Category\CategoryController', ['only' => ['index']]);
Route::resource('categories.transactions', 'Category\CategoryTransactionController', ['only' => ['index']]);

/**
 * Product
 */
Route::resource('products', 'Product\ProductController', ['only' => ['index', 'show']]);

/**
 * Sellers
 */
Route::resource('sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);
Route::resource('sellers.transactions', 'Seller\SellerTransactionController', ['only' => ['index']]);

/**
 *Transactions
 */
Route::resource('transactions', 'Transaction\TransactionController', ['only' => ['index', 'show']]);
Route::resource('transactions.categories', 'Transaction\TransactionCategoryController', ['only' => ['index']]);
Route::resource('transactions.sellers', 'Transaction\TransactionSellerController', ['only' => ['index']]);


/**
 * Users
 */
Route::resource('users', 'User\UserController', ['except' => ['edit']]);
