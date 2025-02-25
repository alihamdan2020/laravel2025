<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [function (){
    return view ('index');
}]);

Route::get('/modal', [ProductController::class,'indexModel']);
Route::get('/facade', [ProductController::class,'indexFacade']);

route::get('/insert',[ProductController::class,'insert'])->name('insert_data');
route::post('/insert',[ProductController::class,'storeFacade'])->name('storeFacade');
route::post('/insertM',[ProductController::class,'storeModale'])->name('storeModale');



