@if (session('success'))
    <div class="alert alert-success bg-green-100 text-green-800 p-3 rounded my-1">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-error bg-red-100 text-red-800 p-3 rounded my-1">
        {{ session('error') }}
    </div>
@endif
