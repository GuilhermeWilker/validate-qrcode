<x-layout>
    <x-alert />
    <div class="space-y-2 w-full">

        <h3 class="text-3xl md:text-4xl font-semibold tracking-tight leading-tight transition-all text-nowrap mb-2">
            Evento Rainha <span class="text-blue-500">75 anos!</span>
        </h3>

        <p class="mb-2 text-[16px] text-[#706f6c]dark:text-[#A1A09A]">
            Valide o <b class="text-blue-600">QR Code</b> do visitante <br>
            utilizando o seu <b>"bipador"</b>
        </p>

        <form action="{{ route('validate-qrcode') }}" method="post">
            @csrf

            <input type="text" name="qrcode" autofocus class="w-full border my-2 p-2" placeholder="Validar QrCode">
        </form>

    </div>
</x-layout>
