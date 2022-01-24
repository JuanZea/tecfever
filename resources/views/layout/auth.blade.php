@extends('layout.app')

@section('main')
    <div class="h-full w-full">
        <nav class="flex justify-between items-center w-full bg-gray-800 py-2 px-8 shadow">
            <a href="{{ route('home') }}" class="select-none cursor-pointer text-white text-4xl font-bungee hover:scale-125 duration-100">TecFever</a>
            <dropdown name="{{ auth()->user()->name }}" profile-route={{ route('profile') }} panel-route={{ auth()->user()->hasRole('admin') ? route('panel') : null }}></dropdown>
        </nav>
        @yield('content')
    </div>
@endsection
