<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Consoles.dev') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        <nav class="mb-2 mt-8 py-6">
            <div class="container mx-auto px-6 md:px-0 text-center">
                <div class="flex items-center justify-center">
                    <h1 class="mr-6">
                        <a href="{{ url('/') }}" class="font-bold font-display lowercase no-underline text-5xl text-gray-800">
                            {{ config('app.name', 'Consoles.dev') }}
                        </a>
                    </h1>
                </div>
                <span class="inline-block bg-teal-200 text-teal-800 text-xs px-2 py-1 rounded-full uppercase font-semibold tracking-wide">These are shortcuts</span>
            </div>
        </nav>

        @yield('content')

        <div class="container md:mt-6 mx-auto p-4 md:px-0 text-center text-gray-700">
            From the lovely folks at <a href="https://tighten.co/" class="underline hover:text-gray-800">Tighten</a>. Open source on <a href="https://github.com/tightenco/consoles" class="underline hover:text-gray-800">GitHub as tightenco/consoles</a>
        </div>
    </div>

    
    <!-- Scripts -->
    <script src="{{ mix('js/mousetrap.js') }}"></script>
</body>
</html>
