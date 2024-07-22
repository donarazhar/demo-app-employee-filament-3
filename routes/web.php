<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

// Route::get('/', function () {
//     return view('filament.admin.auth.login');
// });

Route::get('/', function () {
    return redirect()->route('filament.admin.auth.login');
});

Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoices.store');
