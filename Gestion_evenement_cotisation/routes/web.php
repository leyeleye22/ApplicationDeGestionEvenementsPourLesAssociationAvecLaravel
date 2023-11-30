<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\WelcomController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\AssociationController;
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

Route::get('/', [WelcomController::class, 'index']);
Route::get('/contact', [WelcomController::class, 'contact']);
Route::get('/events', [WelcomController::class, 'events']);
Route::get('/about', [WelcomController::class, 'about']);

Route::get('loginEntreprise', [AssociationSessionController::class, 'create'])
    ->name('loginEntreprise');
Route::post('loginEntreprises', [AssociationSessionController::class, 'store'])
    ->name('loginEntreprises');
Route::get('registerEntreprise', [RegisteredAssociationController::class, 'create'])
    ->name('Entrepriseregister');
Route::post('registerEntreprises', [RegisteredAssociationController::class, 'store'])
    ->name('Entrepriseregisters');
Route::middleware('auth:association')->group(function () {

    Route::get('/declined/{iduser}/{reservation}', [EvenementController::class, 'delete']);
    Route::get('/sowreservation/{id}', [EvenementController::class, 'show']);
    Route::get('/viewreservation', [EvenementController::class, 'view']);
    Route::post('/send/even', [EvenementController::class, 'edit']);
    Route::get('/delete/{id}', [EvenementController::class, 'index']);
    Route::get('/update/{id}', [EvenementController::class, 'update']);
    Route::get('/viewmore/{id}', [EvenementController::class, 'create']);
    Route::get('/dashboard/association', [AssociationController::class, 'create']);
    Route::get('/create/events', function () {
        return view('Company.Events');
    });
    Route::get('/dash', function () {
        return redirect('/dashboard/association');
    });

    Route::post('/EventCreated', [AssociationController::class, 'store']);
});


Route::middleware('client')->group(function () {
    Route::get('dashboard', [ClientController::class, 'index']);
    Route::get('/client/contact', function () {
        return view('Clients.Contact');
    });
    Route::get('/reservation/{id1}/{id2}', [ClientController::class, 'createeven']);
    Route::post('/reservation', [ClientController::class, 'storeeven']);
    Route::get('/client/events', [ClientController::class, 'Events']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
