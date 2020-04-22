<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="A list of API management consoles">

    <meta property="og:site_name" content="Consoles.dev">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="Consoles.dev">
    <meta property="og:url" content="https://consoles.dev/">
    <meta property="og:type" content="website">
    <meta property="og:description" content="A list of API management consoles">

    <meta property="og:image" content="http://consoles.dev/images/opengraph.png">
    <meta property="og:image:height" content="630">
    <meta property="og:image:width" content="1200">

    <meta name="twitter:site" content="@stauffermatt">
    <meta name="twitter:creator" content="@stauffermatt">
    <meta name="twitter:title" content="Consoles.dev">
    <meta name="twitter:description" content="A list of API management consoles">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="http://consoles.dev/images/opengraph.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Consoles.dev') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        <nav class="mb-2 mt-8 py-6">
            <div class="container mx-auto px-6 md:px-0 text-center">
                <div class="flex items-center justify-center">
                    <h1 class="mr-6">
                        <a href="{{ url('/') }}">
                            <img src="/images/logo.png" alt="Consoles.dev" title="Consoles.dev" style="width: 316px">
                        </a>
                    </h1>
                </div>
            </div>
        </nav>

        @yield('content')

        <div class="container md:mt-6 mx-auto p-4 md:px-0 text-center text-gray-700">
            From the lovely folks at <a href="https://tighten.co/" class="underline hover:text-gray-800">Tighten</a>. Open source on <a href="https://github.com/tightenco/consoles" class="underline hover:text-gray-800">GitHub as tightenco/consoles</a>
        </div>
    </div>
</body>
</html>
