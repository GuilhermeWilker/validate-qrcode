<?php

use App\Http\Controllers\EmailController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get("/test", fn() => redirect()->back()->with('success', 'Convites enviados!'));

Route::post("/send-emails", [EmailController::class, 'sendEmails'])->name("send-email");
