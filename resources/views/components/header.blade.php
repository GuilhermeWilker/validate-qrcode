<header class="flex items-center gap-4 my-2">
    <a href="/" @class([ 'hover:bg-[#1f2839] hover:text-white border border-[#1f2839] text-slate-700 rounded-md p-1 px-4' , 'bg-[#2d3a53] text-white'=> Route::is('validate-qrcode'),
        ])>
        Validar QR Codes
    </a>


    <a href="/send-qrcode" @class([ 'hover:bg-[#1f2839] hover:text-white border border-[#1f2839] text-slate-700 rounded-md p-1 px-4' , 'bg-[#2d3a53] text-white'=> Route::is('home'),
        ])>
        Enviar emails
    </a>

    <a href="/add-csv" @class([ 'hover:bg-[#1f2839] hover:text-white border border-[#1f2839] text-slate-700 rounded-md p-1 px-4' , 'bg-[#2d3a53] text-white'=> Route::is('add-csv'),
        ])>
        Adicionar .csv
    </a>
</header>
