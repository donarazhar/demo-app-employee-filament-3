<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoices.store');
