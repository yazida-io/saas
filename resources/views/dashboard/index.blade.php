@extends('layouts.default')

@section('title', 'Dashboard')

@section('content')
    <section class="py-20">
        <div class="container bg-white/20 flex justify-between items-center">
            <h1>
                Dashboard
            </h1>

            <a href="{{ route('auth.logout') }}"
               class="px-4 py-2 bg-red-500 text-white hover:bg-red-600 transition duration-200 ease-in-out"
            >
                Logout
            </a>
        </div>
    </section>
@endsection
