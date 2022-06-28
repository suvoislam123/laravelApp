<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ComponentsUserController;
use App\Http\Controllers\CrudController;
// App Index
Route::get('/',[IndexController::class,'showIndexPage']);
// End App Index
// Components User views Routes
Route::controller(ComponentsUserController::class)->prefix('components-user')->group(function(){
    Route::get('/','showIndex');
    Route::get('/user1','showUser1');
});
// Components user viws Routes Ends
// CRUD Routes
// -------------?// I will do crud for products table only
Route::get('/products',[CrudController::class,'index'])->name('products.index');
// CRUD Routes Ends

// Basic Routes

// Basic Routes Ends
