<!doctype html>
<html>

<head>
    <title>Laravel From Scratch Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="font-[Inter]">
    <section class="px-6 py-8">
        <x-navbar />
        {{ $slot }}
        <x-footer />
    </section>
    @if (session()->has('success'))
    <div>
        <p 
            x-data="{ show: true }"
            x-init="setTimeout(()=>show=false, 5000)"
            x-show="show"
            class="fixed right-6 bottom-6 bg-blue-100 text-blue-500 border border-blue-500 text-sm rounded-xl px-4 py-2">
            {{ session()->get('success') }}
        </p>
    </div>
    @endif
    @stack('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>