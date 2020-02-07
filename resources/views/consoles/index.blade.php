@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">
            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">
                <div class="w-full p-6 text-xl">
                    <ul class="list-disc ml-6 leading-loose">
                    @foreach ($consoles as $console)
                        <li><a href="{{ $console->url }}" class="text-blue-600 hover:text-blue-800 underline">{{ $console->name }}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
