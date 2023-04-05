<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Livewire\Register;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Login;
use App\Http\Livewire\CreateGoal;
use App\Http\Livewire\ShowGoal;
use App\Http\Livewire\EditGoal;
use App\Http\Livewire\ShowObjective;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('goals')->name('goals.')->group(function () {
        Route::get('create', CreateGoal::class)->name('create');
        Route::get('{goal}', ShowGoal::class)->name('show');
        Route::get('{goal}/edit', EditGoal::class)->name('edit');
    });

    Route::prefix('objectives')->name('objectives.')->group(function () {
        Route::get('{objective}', ShowObjective::class)->name('show');
    });
});
