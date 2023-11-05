<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Index;
use App\Livewire\About;
use App\Livewire\OurProducts;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Index::class);

Route::get('/about', About::class);

Route::get('/our-products', OurProducts::class );
