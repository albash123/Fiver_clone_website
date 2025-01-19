<?php

use App\Http\Controllers\Gigcontroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GigController::class, 'getGigs']);


//Route::view('/', 'welcome')->name('home');

Route::prefix('seller')->group(function () {
    Route::view('/dashboard', 'seller.pages.dashboard')->name('seller-dashboard')->middleware('auth');
    Route::view('/gigs', 'seller.pages.gigs')->name('seller-gigs');
    Route::view('/create-gig', 'seller.pages.create-gig')->name('seller-add-gigs');
    Route::view('/single-gig/{id}', 'seller.pages.single-gig');
    Route::view('/login', 'seller.pages.login')->name('login')->middleware('guest');
    Route::view('/signup', 'seller.pages.signup')->name('signup')->middleware('guest');



    //get routes

    Route::get('/create-gig', [Gigcontroller::class, 'getCategories']);
    Route::get('/get-single-gig/{id}', [Gigcontroller::class, 'getsingleGig']); //get single gig

    //post routes
    Route::post('/get-relevent-values', [Gigcontroller::class, 'getReleventValues']);
    Route::post('/add-gig', [Gigcontroller::class, 'addGig']);
    Route::post('/signup', [UserController::class, 'loginUser']);
});
