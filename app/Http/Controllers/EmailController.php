<?php

namespace App\Http\Controllers;

ini_set('max_execution_time', 120);

use App\Mail\QrcodeInvite;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Jobs\SendQrcodeEmail;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\QrcodeInvite as ModelsQrcodeInvite;

class EmailController extends Controller
{
    public function sendEmails()
    {
        try {
            $guardians = User::all();
            $guardiansChunks = $guardians->chunk(75);

            foreach ($guardiansChunks as $chunk) {
                foreach ($chunk as $guardian) {
                    SendQrcodeEmail::dispatch($guardian);
                }
            }
            return redirect()->back()
                ->with('success', 'Convites enviados!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Não foi possível enviar os convites...');
        }
    }
}
