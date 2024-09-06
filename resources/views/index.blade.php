<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SimpleStream | Code Test</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    @livewireStyles
</head>

<body class="antialiased  h-screen grid bg-slate-100 lg:items-center">
    <div class=" grid lg:grid-cols-12 container gap-10 mx-auto p-4 lg:p-8">
        @livewire('bookings')
        @livewire('create-booking')
    </div>
    @livewireScripts
</body>

</html>