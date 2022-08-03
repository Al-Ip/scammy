@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center min-h-screen py-12 dark:bg-slate-900 sm:px-6 lg:px-8">
        <div class="absolute top-0 right-0 mt-4 mr-4">
            @if (Route::has('login'))
                <div class="space-x-4">
                    <button x-cloak x-on:click="darkMode = !darkMode;">
                        <x-heroicon-s-moon x-show="!darkMode" class="p-2 ml-3 w-8 h-8 text-gray-700 bg-gray-300 rounded-md transition cursor-pointer hover:bg-gray-200" />
                        <x-heroicon-s-sun x-show="darkMode" class="p-2 ml-3 w-8 h-8 text-gray-300 bg-gray-700 rounded-md transition cursor-pointer dark:hover:bg-gray-600" />
                    </button>
                    {{-- @auth
                        <a
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="font-medium text-pink-600 hover:text-purple-400 focus:outline-none focus:underline transition ease-in-out duration-150"
                        >
                            Log out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="font-medium text-pink-600 hover:text-purple-400 focus:outline-none focus:underline transition ease-in-out duration-150">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-medium text-pink-600 hover:text-purple-400 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
                        @endif
                    @endauth --}}
                </div>
            @endif
        </div>

        <div class="flex items-center justify-center">
            <div class="flex flex-col justify-around">
                <div class="space-y-6">
                    <a href="{{ route('home') }}">
                        <x-logo class="w-auto h-16 mx-auto text-pink-600" />
                    </a>

                    <h1 class="font-serif font-extrabold text-transparent text-center text-7xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                        {{ config('app.name') }}
                    </h1>

                    @livewire("detect-sms")
                </div>
            </div>
        </div>
    </div>
@endsection
