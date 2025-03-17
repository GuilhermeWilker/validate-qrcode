<?php

namespace App\Http\Controllers;

use App\Models\QrcodeInvite;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class QrcodeValidatorController extends Controller
{

    public function index()
    {
        $guardians = count(User::all());

        return view('validate-qrcode', [
            'guardians' => $guardians
        ]);
    }

    public function validateQrcode(Request $request)
    {
        $validated = $request->validate([
            'qrcode' => 'required|string'
        ]);

        $qrcode = QrcodeInvite::where("code", $validated['qrcode'])->first();

        if (!$qrcode) {
            return redirect()->back()->with('error', 'QR Code inválido!');
        }

        if ($qrcode->status === 'active') {
            return redirect()->back()->with('error', 'QR Code já está em uso...');
        }

        $qrcode->status = 'active';
        $qrcode->save();

        return back()->with('success', 'QR Code validado com sucesso!');
    }
}
