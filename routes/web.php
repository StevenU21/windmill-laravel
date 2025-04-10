<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/forms', function () {
    return view('pages/forms');
})->name('forms');

Route::get('/cards', function () {
    return view('pages/cards');
})->name('cards');

Route::get('/charts', function () {
    return view('pages/charts');
})->name('charts');

Route::get('/buttons', function () {
    return view('pages/buttons');
})->name('buttons');

Route::get('/modals', function () {
    return view('pages/modals');
})->name('modals');

Route::get('/tables', function () {
    return view('pages/tables');
})->name('tables');

Route::middleware('auth')->prefix('/profile')->name('profile.')->group(function () {
    Route::get('/', [ProfileController::class, 'show'])->name('show');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
    Route::patch('/update', [ProfileController::class, 'update'])->name('update');
    Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('destroy');
});

require __DIR__ . '/auth.php';
