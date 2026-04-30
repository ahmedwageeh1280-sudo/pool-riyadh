<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeoController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/sitemap.xml', [SeoController::class, 'sitemap'])->name('sitemap');
Route::get('/robots.txt',  [SeoController::class, 'robots'])->name('robots');
