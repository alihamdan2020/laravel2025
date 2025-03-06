<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Person;
use Illuminate\Support\Facades\Route;

Route::get('/', [function (){
    return view ('index');
}]);

//get data using 2 methods
Route::get('/modal', [ProductController::class,'indexModel']);
Route::get('/facade', [ProductController::class,'indexFacade']);

Route::get('/categories', [CategoryController::class,'index'])->name('show_categories');

Route::get('/show/{id}', [ProductController::class,'show'])->name('show');

//to fet the form
route::get('/insert',[ProductController::class,'insert'])->name('insert_data');

//route to insert into db suing 2 methods
route::post('/insert',[ProductController::class,'storeFacade'])->name('storeFacade');
route::post('/insertM',[ProductController::class,'storeModale'])->name('storeModale');

//route to show users
route::get('/users',[UserController::class,'index']);
route::get('/jm/{id}',[UserController::class,'show'])->name('show');
route::get('/users/{id}',[UserController::class,'destroy'])->name('destroy');
// route::resource('users',UserController::class);


route::resource('personRoute',PersonController::class);




