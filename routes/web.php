<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController; 

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomepageController::class,'index']);  
  
Route::get('products', [HomepageController::class, 'products']); 
Route::get('product/{slug}', [HomepageController::class, 'product']); 
Route::get('categories',[HomepageController::class, 'categories']); 
Route::get('category/{slug}', [HomepageController::class, 'category']); 
Route::get('cart', [HomepageController::class, 'cart']); 
Route::get('checkout', [HomepageController::class, 'checkout']);