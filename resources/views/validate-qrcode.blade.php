<x-layout>
    <x-alert />
    <div class="space-y-3 w-[26em]">

        <h1 class="mb-1 font-medium text-2xl">Validar Qr Code</h1>

        <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A] text-[15px]">
            Utilizer o <b>"bipador"</b>para <br> validar os convites do evento.
        </p>

        <form action="{{ route('validate-qrcode') }}" method="post">
            @csrf

            <input type="text" class="border border-zinc-800 p-2 px-4 rounded-md w-full" name="" />

            {{-- <button
                  class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
                  Enviar Convites por E-mail
              </button> --}}
        </form>

    </div>
</x-layout>
