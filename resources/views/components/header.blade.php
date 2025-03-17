<header class="flex items-center gap-4 my-2">
    <a href="/validate-qrcode" @class([
        'bg-zinc-800 text-white rounded-md p-2 px-4',
        'bg-blue-500' => Route::is('validate-qrcode'),
    ])>
        Validar QR Codes
    </a>

    <a href="/" @class([
        'bg-zinc-800 text-white rounded-md p-2 px-4',
        'bg-blue-500' => Route::is('home'),
    ])>
        Enviar emails
    </a>
</header>
