<?php

use App\Http\Controllers\Gigcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [GigController::class, 'getGigs']);


Route::view('/', 'welcome')->name('home');

Route::prefix('seller')->group(function () {
    Route::view('/dashboard', 'seller.pages.dashboard')->name('seller-dashboard');
    Route::view('/gigs', 'seller.pages.gigs')->name('seller-gigs');
    Route::view('/create-gig', 'seller.pages.create-gig')->name('seller-add-gigs');


    //get routes

    Route::get('/create-gig', [Gigcontroller::class, 'getCategories']);

    //post routes
    Route::post('/get-relevent-values', [Gigcontroller::class, 'getReleventValues']);
    Route::post('/add-gig', [Gigcontroller::class, 'addGig']);
});
