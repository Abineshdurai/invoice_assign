<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InvoiceController;

Route::get('/', [InvoiceController::class, 'create']);
Route::post('/invoice', [InvoiceController::class, 'store']);
