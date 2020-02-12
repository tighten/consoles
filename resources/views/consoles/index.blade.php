@extends('layouts.app')

@section('content')
<div class="container max-w-4xl mx-auto">
        @foreach ($providers as $provider)
            <div class="font-semibold m-2 text-gray-700 text-lg uppercase">{{ $provider->name }}</div>
            <div class="flex-grow flex flex-wrap rounded mx-2 mb-8 md:mx-0">
                @foreach ($provider->consoles as $console)
                    <a href="{{ $console->url }}" class="m-2" id="{{ $console->shortcut }}">
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <span class="inline-block bg-teal-200 text-teal-800 text-xs px-2 py-1 rounded-full uppercase font-semibold tracking-wide shortcut">{{ $console->shortcut }}</span>
                            <h4 class="mt-1 font-semibold text-lg leading-tight truncate">{{ $console->name }}</h4>
                        </div>
                    </a>
                @endforeach
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
