@extends('layouts.app')

@section('content')
<div class="container max-w-4xl mx-auto">
    @foreach ($providers as $provider)
        <div class="font-semibold m-2 text-gray-700 text-lg uppercase">{{ $provider->name }}</div>
        <div class="flex-grow flex flex-wrap rounded mx-2 mb-8 md:mx-0">
            @foreach ($provider->consoles as $console)
                <a href="{{ $console->url }}" class="m-2" id="{{ $console->shortcut }}">
                    <div class="bg-blue-700 hover:bg-blue-800 px-5 py-3 rounded-lg shadow-sm text-white hover:text-white">
                        <h4 class="font-semibold text-lg leading-tight truncate">{{ $console->name }}</h4>
                    </div>
                </a>
            @endforeach
        </div>
    @endforeach
</div>
@endsection
