<?php

use App\Http\Controllers\product\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix"=>"product"],function(){


    Route::get("showAllProducts",[ProductController::class,"showAllProducts"]);
    Route::get("addNewProduct",[ProductController::class,"addNewProduct"]);
    Route::post("storeTheNewProduct",[ProductController::class,"storeTheNewProduct"]);
    Route::get("editOnePeoduct/{product_id}",[ProductController::class,"editOnePeoduct"]);
    Route::post("storeTheEditProduct/{product_id}",[ProductController::class,"storeTheEditProduct"]);
    Route::get("deleteOneProduct/{product_id}",[ProductController::class,"deleteOneProduct"]);


});