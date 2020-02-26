<?php

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'DashboardController@index')->name('home');
    Route::get('/home', 'DashboardController@index')->name('home');    
});
