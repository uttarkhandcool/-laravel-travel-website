<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\TravelWebsite;

Route::get('/', function () {
    return view('index');
});

Route::get("/about",[TravelWebsite::class,'getAbout']);

Route::get("/shop",[TravelWebsite::class,'getShop']);
Route::get("/packages",[TravelWebsite::class,'getpackages']);

Route::get("/reviews",[TravelWebsite::class,'getReviews']);
Route::get("/shop",[TravelWebsite::class,'getshop']);
Route::get("/blogs",[TravelWebsite::class,'getblogs']);
