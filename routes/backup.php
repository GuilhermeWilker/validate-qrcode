<?php

use App\Models\User;
use App\Jobs\SendQrcodeEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\QrcodeValidatorController;

Route::get('/', function () {
    $guardians = count(User::all());

    return view('index', [
        'guardians' => $guardians
    ]);
})->name('home');

Route::get('/validate-qrcode', function () {
    $guardians = count(User::all());

    return view('validate-qrcode', [
        'guardians' => $guardians
    ]);
})->name('validate-qrcode');

Route::get('/add-csv', function () {
    return view('add-csv');
})->name('add-csv');

Route::post("/send-emails", [EmailController::class, 'sendEmails'])->name("send-email");
Route::post('/validate-qrcode', [QrcodeValidatorController::class, 'validateQrcode'])
    ->name('validate-qrcode');
