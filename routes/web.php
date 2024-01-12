<?php

use App\Livewire\Register;
use App\Livewire\RegisterSchool;
use App\Livewire\RegisterTutor;
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

Route::view('/', 'welcome');

// Register
Route::get('/register', Register::class)->name('register');
Route::get('/register/school', RegisterSchool::class)->name('register-school');
Route::get('/register/tutor', RegisterTutor::class)->name('register-tutor');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
