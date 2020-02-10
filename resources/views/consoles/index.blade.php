@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="md:flex">
            <div class="flex-none mb-10 md:mb-6 md:mr-8 mx-auto w-64">
                <img src="/images/undraw_dashboard_nklg.svg" alt="Illustration of a man standing in front of a computer monitor showing a dashboard.">
            </div>
            <div class="break-words bg-white border border-2 flex-grow rounded mx-2 md:mx-0 shadow-md">
                <div class="w-full p-6 text-xl">
                    <ul class="leading-loose">
                    @foreach ($consoles as $console)
                        <li class="block"><a href="{{ $console->url }}" class="bg-blue-700 hover:bg-blue-800 inline-block border font-semibold p-2 px-6 rounded-md text-blue-100 hover:text-white mb-4">{{ $console->name }}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
