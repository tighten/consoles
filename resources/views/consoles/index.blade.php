@extends('layouts.app')

@section('content')
    <div class="container max-w-2xl mx-auto">
        <div class="md:flex">
            <div class="flex-none mb-10 md:mb-6 md:mr-8 mx-auto w-48 md:w-64">
                <img src="/images/undraw_dashboard_nklg.svg" alt="Illustration of a man standing in front of a computer monitor showing a dashboard.">
            </div>
            <div class="flex-grow rounded mx-2 md:mx-0">
                <div class="w-full p-2 md:p-6 text-xl">
                    @foreach ($providers as $provider)
                        <div class="mb-4">
                            <div class="font-semibold mb-2 text-gray-700 text-lg uppercase">{{ $provider->name }}</div>
                            @foreach ($provider->consoles as $console)
                                <a href="{{ $console->url }}" class="bg-blue-700 hover:bg-blue-800 inline-block border font-semibold mr-2 py-3 px-6 rounded-md text-blue-100 hover:text-white mb-4">{{ $console->name }}</a><br>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
