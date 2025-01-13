<?php

use App\Http\Controllers\Gigcontroller;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::prefix('seller')->group(function () {
    Route::view('/dashboard', 'seller.pages.dashboard')->name('seller-dashboard');
    Route::view('/gigs', 'seller.pages.gigs')->name('seller-gigs');
    Route::view('/create-gig', 'seller.pages.create-gig')->name('seller-add-gigs');


    //get routes

    Route::get('/create-gig', [Gigcontroller::class, 'getCategories']);


});
