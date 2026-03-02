@extends('layouts.app')

@section('content')
<div class="container max-w-4xl mx-auto" x-data="{ showShortcuts: $persist(false) }">
    <div class="flex justify-end items-center gap-2 mx-2 mb-4 md:mx-0">
        <span class="text-sm text-gray-600">Show shortcut URLs?</span>
        <button
            type="button"
            role="switch"
            :aria-checked="showShortcuts"
            @click="showShortcuts = !showShortcuts"
            :class="showShortcuts ? 'bg-green-500' : 'bg-gray-300'"
            class="relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full transition-colors duration-200 ease-in-out"
        >
            <span
                :class="showShortcuts ? 'translate-x-5' : 'translate-x-0'"
                class="pointer-events-none inline-block h-6 w-6 rounded-full bg-white shadow ring-0 transition-transform duration-200 ease-in-out"
            ></span>
        </button>
    </div>

    @foreach ($providers as $provider)
        <div class="font-semibold m-2 text-gray-700 text-lg uppercase">{{ $provider->name }}</div>
        <div class="grow flex flex-wrap rounded-sm mx-2 mb-8 md:mx-0">
            @foreach ($provider->consoles as $console)
                <a href="{{ $console->url }}" class="m-2" id="{{ $console->route }}">
                    <div class="bg-blue-700 hover:bg-blue-800 px-5 py-3 rounded-lg shadow-xs text-white hover:text-white">
                        <h4 class="font-semibold text-lg leading-tight truncate">{{ $console->name }}</h4>
                        <p x-show="showShortcuts" x-cloak class="text-sm text-white/70 leading-tight">/{{ $console->route }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    @endforeach
</div>
@endsection
