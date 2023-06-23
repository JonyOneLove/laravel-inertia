<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\OrderController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return view('landing');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');


    // Projects
    Route::resource('dashboard/projects', ProjectController::class);

    // Links
    Route::resource('dashboard/links', LinkController::class);

    // Platforms
    Route::resource('dashboard/platforms', PlatformController::class);

    // Contractors
    Route::resource('dashboard/contractors', ContractorController::class);

    // Orders
    Route::resource('dashboard/orders', OrderController::class);
});
