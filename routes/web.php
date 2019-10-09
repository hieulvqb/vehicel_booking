<?php

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

//-----------------------DASHBOARD-----------------------

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

//-----------------------END DASHBOARD-----------------------
