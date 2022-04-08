<?php

use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\GraphicdesignerComponent;
use App\Http\Livewire\IndexComponent;
use App\Http\Livewire\PageEcommerce;
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

Route::get('/', IndexComponent::class);
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/FreeEcommerce', PageEcommerce::class)->name('pagecommerce');
Route::get('/GraphicDesigner', GraphicdesignerComponent::class)->name('graphicdesigner');
