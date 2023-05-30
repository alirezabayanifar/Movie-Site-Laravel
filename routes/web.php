<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
   TemplateController::class,
   'index'
])->name('index');

Route::get('/movie/{movie}' , [
    TemplateController::class,
    'show'
])->name('movie.single');

Route::get('search', [
    TemplateController::class,
    'search'
])->name('search');

Route::get('movies' , [
    TemplateController::class,
    'movies'
])->name('movies');

Route::get('series', [
    TemplateController::class,
    'series'
])->name('series');

Route::get('faq', [
   TemplateController::class,
   'faq'
])->name('faq');

Route::get('help', [
    TemplateController::class,
    'help'
])->name('help');

Route::get('terms', [
    TemplateController::class,
    'terms'
])->name('terms');

Route::post('email', [
    TemplateController::class,
    'email'
])->name('email');
