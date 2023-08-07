<?php

use App\Http\Controllers\App\Settings\InvoiceController;
use App\Http\Controllers\App\Settings\SubscriptionController;

Route::view('/', 'app.index')->name('app.index');

// Top links
Route::view('profile', 'app.index')->name('app.profile');
Route::view('orders', 'app.index')->name('app.orders');
Route::view('invoices', 'app.index')->name('app.invoices');

// Bottom links
Route::view('announcements', 'app.announcements')->name('app.announcements');
Route::view('help', 'app.help')->name('app.help');

Route::prefix('settings')->name('app.settings.')->group(function () {
    Route::view('/', 'app.settings.index')->name('index');
    Route::view('profile', 'app.settings.profile')->name('profile');
    Route::view('password', 'app.settings.passwords')->name('passwords');
    Route::view('notifications', 'app.settings.notifications')->name('notifications');

    // Subscriptions
    Route::withoutMiddleware(['subscribed'])->prefix('billing')->group(function () {
        Route::view('/', 'app.settings.billing')->name('subscriptions');

        Route::post('subscriptions', [SubscriptionController::class, 'subscribe'])->name('subscriptions.subscribe');
        Route::get('invoices/{invoiceId}/download', [InvoiceController::class, 'download'])
            ->name('billing.invoices.download');
    });
});
