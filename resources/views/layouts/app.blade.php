<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
</head>

<body>
    @include('layouts.navbar')
    {{-- main --}}
    <div class="container mx-auto">
        @yield('content')
    </div>
    @include('layouts.footer')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="js/alpine.js"></script>

</body>

</html>
