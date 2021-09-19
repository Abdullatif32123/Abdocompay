<?php

use App\Http\Controllers\product\ProductController;
use App\Http\Controllers\market\MarketController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix"=>"market"],function(){

    Route::get("showAllMarkets",[MarketController::class,"showAllMarkets"]);
    Route::post("storeTheNewMarket",[MarketController::class,"storeTheNewMarket"]);
    Route::get("addNewMarket",[MarketController::class,"addNewMarket"]);
    Route::get("showProductInMarket/{market_id}",[MarketController::class,"showProductInMarket"]);
    Route::get("deleteOneProductFromMarket/{market_id}/{product_id}",[MarketController::class,"deleteOneProductFromMarket"]);
    Route::get("deleteMarket/{market_id}",[MarketController::class,"deleteMarket"]);
    Route::get("editMarket/{market_id}",[MarketController::class,"editMarket"]);
    Route::post("storeTheEditMarket/{market_id}",[MarketController::class,"storeTheEditMarket"]);
    Route::get("addProductsToMarket/{market_id}",[MarketController::class,"addProductsToMarket"]);
    Route::post("StoreAddProductsToMarket/{market_id}",[MarketController::class,"StoreAddProductsToMarket"]);
});