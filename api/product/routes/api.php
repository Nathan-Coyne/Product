<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Define a GET endpoint
Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/sub-categories/{id}/products', [ProductController::class, 'showBySubCategoryId']);


// Define a GET endpoint
Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/{id}', [CategoryController::class, 'show']);

// Define a GET endpoint
Route::get('/sub-categories', [SubCategoryController::class, 'index']);

Route::get('/sub-categories/{id}', [SubCategoryController::class, 'show']);

Route::get('/categories/{id}/sub-categories', [SubCategoryController::class, 'showByCategoryId']);

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
