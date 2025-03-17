<x-layout>
    <x-alert />
    <div class="space-y-3">

        <h1 class="mb-1 font-medium text-2xl">Enviar convites</h1>

        <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A] text-[15px]">
            Você tem <b>{{ $guardians }} visitantes</b> confirmados <br> para o evento.
        </p>

        <form action="{{ route('send-email') }}" method="post">
            @csrf

            <button
                class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
                Enviar Convites por E-mail
            </button>
        </form>

    </div>
</x-layout>
