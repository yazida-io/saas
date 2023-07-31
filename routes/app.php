<?php

Route::view('/', 'app.index')->name('app.index');

// Top links
Route::view('profile', 'app.index')->name('app.profile');
Route::view('orders', 'app.index')->name('app.orders');
Route::view('invoices', 'app.index')->name('app.invoices');

// Bottom links
Route::view('announcements', 'app.announcements')->name('app.announcements');
Route::view('help', 'app.help')->name('app.help');
Route::view('settings', 'app.settings')->name('app.settings');
