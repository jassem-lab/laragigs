<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
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
// ALL LISTING
Route::get('/', [ListingController::class, 'index']);
// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);
// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);
// SINGLE LISTING
Route::get('/listings/{listing}', [ListingController::class, 'show']);
//