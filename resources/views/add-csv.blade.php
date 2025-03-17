<x-layout>
    <x-alert />
    <div class="space-y-3">

        <h3 class="text-3xl md:text-4xl font-semibold tracking-tight leading-tight transition-all text-nowrap mb-2">
            Adicionar <span class="text-blue-500">visitantes</span>
        </h3>

        <p class="mb-2 text-[16px] text-[#706f6c]dark:text-[#A1A09A]">
            Adicione seu arquivo <b class="text-blue-600">(.csv)</b> <br>
            para gerar os <b>visitantes do evento.</b>
        </p>

        <form action="{{ route('add-csvfile') }}"
            class="space-y-1 my-5"
            method="post"
            enctype="multipart/form-data">
            @csrf

            <input type="file" name="csv" class="border p-2 px-4 rounded-md" id="">

            <button
                type="submit"
                class="inline-block hover:bg-[#2d3a48] hover:border-[#2d3a48] px-5 py-1.5 bg-[#2d3a53] rounded-sm border border-[#2d3a48] text-white text-sm leading-normal">
                Adicionar
            </button>
        </form>
    </div>
</x-layout>
