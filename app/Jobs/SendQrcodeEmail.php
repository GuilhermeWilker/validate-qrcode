<?php

namespace App\Jobs;

use App\Mail\QrcodeInvite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\QrcodeInvite as ModelQrcodeInvite;

class SendQrcodeEmail implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        protected $guardian
    ) {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $code = hash('sha256', $this->guardian->EMAIL . Str::uuid7());
        $qrcode_path = 'qrcodes/' . $this->guardian->EMAIL . '.png';

        ModelQrcodeInvite::create([
            'user_id' => $this->guardian->id,
            'code' => $code
        ]);

        Storage::disk('public')->put(
            $qrcode_path,
            QrCode::format('png')->size(300)->generate($code)
        );

        Mail::to($this->guardian->EMAIL)->send(new QrcodeInvite(
            $this->guardian->NOME,
            $this->guardian->EMAIL,
            storage_path('app/public/' . $qrcode_path)
        ));
    }
}
