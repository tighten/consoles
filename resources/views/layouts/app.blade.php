<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        <nav class="mb-2 mt-8 py-6">
            <div class="container mx-auto px-6 md:px-0">
                <div class="flex items-center justify-center">
                    <div class="mr-6">
                        <a href="{{ url('/') }}" class="text-4xl text-gray-800 font-bold no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')

        <div class="container mt-6 md:mt-12 mx-auto px-2 md:px-0 text-gray-600">
            From the lovely folks at <a href="https://tighten.co/" class="underline hover:text-gray-800">Tighten</a>. Open source on <a href="https://github.com/tightenco/consoles" class="underline hover:text-gray-800">GitHub as tightenco/consoles</a>
        </div>
    </div>

    {{--
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    --}}
</body>
</html>
