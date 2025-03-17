<x-layout>
    <x-alert />
    <div class="space-y-3">

        <h3 class="text-3xl md:text-4xl font-semibold tracking-tight leading-tight transition-all text-nowrap mb-2">
            Evento Rainha <span class="text-blue-500">75 anos!</span>
        </h3>

        <p class="mb-2 text-[16px] text-[#706f6c]dark:text-[#A1A09A]">
            Enviar <b class="text-blue-600">QR Code</b> em massa <br> para <b>{{$guardians}} visitantes</b>
        </p>

        <form action="{{ route('send-email') }}" method="post">
            @csrf

            <button
                class="inline-block hover:bg-[#2d3a48] hover:border-[#2d3a48] px-5 py-1.5 bg-[#2d3a53] rounded-sm border border-[#2d3a48] text-white text-sm leading-normal">
                Enviar Convites por E-mail
            </button>
        </form>
    </div>
</x-layout>
