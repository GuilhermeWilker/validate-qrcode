<?php

use App\Http\Controllers\CsvController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QrcodeValidatorController;

Route::get('/', [QrcodeValidatorController::class, 'index'])
    ->name('validate-qrcode');
Route::post('/validate-qrcode', [QrcodeValidatorController::class, 'validateQrcode'])
    ->name('validate-qrcode');


Route::get('/send-qrcode', [EmailController::class, 'index'])
    ->name('home');
Route::post("/send-emails", [EmailController::class, 'sendEmails'])
    ->name("send-email");

Route::get('/add-csv', [CsvController::class, 'index'])->name('add-csv');
Route::post("/add-csvfile", [CsvController::class, 'generateDataFromCsv'])->name("add-csvfile");



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::redirect('/dashboard', '/validate-qrcode');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
