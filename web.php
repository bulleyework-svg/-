
<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')->name('dashboard');
Route::view('/items', 'items')->name('items');
Route::view('/intake', 'intake')->name('intake');
Route::view('/returns', 'returns')->name('returns');
Route::view('/cz', 'cz')->name('cz');
Route::view('/cz/scan', 'cz-scan')->name('cz.scan');
