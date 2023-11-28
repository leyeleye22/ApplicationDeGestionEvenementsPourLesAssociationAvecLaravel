<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('Contact');
});
Route::get('/events', function () {
    return view('Events');
});
Route::get('/about', function () {
    return view('About');
});

// Route::get('association/dashboard', function () {
//     return view('Clients.dashboard');
// })->middleware(['client'])->name('dashboard');

Route::middleware('client')->group(function () {
    Route::get('dashboard', function () {
        return view('Clients.dashboard');
    });
    Route::get('/client/contact', function () {
        return view('Clients.Contact');
    });
    Route::get('/client/events', function () {
        return view('Clients.Events');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
