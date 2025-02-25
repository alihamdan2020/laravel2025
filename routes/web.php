<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/modal', [ProductController::class,'indexModel']);

Route::get('/facade', [ProductController::class,'indexFacade']);

Route::get('/', [function (){
    return view ('index');
}]);


