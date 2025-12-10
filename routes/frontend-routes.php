<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::get('/', [LandingPageController::class, 'landingPage'])->name('home');

    Route::view('/services', 'frontend.pages.services')->name('services');
    Route::view('/rental', 'frontend.pages.rental')->name('rental');
    Route::view('/about', 'frontend.pages.about')->name('about');

    Route::view('/repaire', 'frontend.pages.repaire')->name('repaire');
    Route::view('/repairesubservice', 'frontend.pages.repairesubservice')->name('repairesubservice');
    Route::view('/location', 'frontend.pages.location')->name('location');
    Route::view('/locationdetail', 'frontend.pages.locationdetail')->name('locationdetail');
    Route::view('/contact-us', 'frontend.pages.contact-us')->name('contact-us');
    Route::view('/privacy', 'frontend.pages.privacypolicy')->name('privacy');
    Route::view('/terms', 'frontend.pages.termspage')->name('terms');
    Route::view('/disclaimer', 'frontend.pages.disclaimer')->name('disclaimer');
    Route::view('/blog', 'frontend.pages.blog')->name('blog');
    Route::view('/blogdetail', 'frontend.pages.blogdetail')->name('blogdetail');
    Route::view('/feedback', 'frontend.pages.feedback')->name('feedback');

});
