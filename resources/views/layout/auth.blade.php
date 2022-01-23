@extends('layout.app')

@section('main')
    <div class="h-full w-full">
        <nav class="flex justify-end w-full bg-gray-800 py-4 px-8">
            <img class="rounded-full cursor-pointer hover:opacity-90" src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&background=FF0000&color=fff&size=50&bold=true" alt="avatar">
        </nav>
        @yield('content')
    </div>
@endsection
