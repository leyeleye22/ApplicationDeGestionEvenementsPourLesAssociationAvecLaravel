<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AssociationSessionController;
use App\Http\Controllers\Auth\RegisteredAssociationController;

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

Route::get('loginEntreprise', [AssociationSessionController::class, 'create'])
    ->name('loginEntreprise');
Route::post('loginEntreprises', [AssociationSessionController::class, 'store'])
    ->name('loginEntreprises');

Route::get('registerEntreprise', [RegisteredAssociationController::class, 'create'])
    ->name('Entrepriseregister');
Route::post('registerEntreprises', [RegisteredAssociationController::class, 'store'])
    ->name('Entrepriseregisters');
Route::get('/dashboard/association', function () {
    return view('Company.dashboard');
})->middleware('auth:association');

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
