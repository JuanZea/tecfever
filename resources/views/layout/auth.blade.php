@extends('layout.app')

@section('main')
    <div class="h-full w-full">
        <nav class="flex justify-end w-full bg-gray-800 py-4 px-8">
            <dropdown name="{{ auth()->user()->name }}" profile-route={{ route('profile') }}></dropdown>
        </nav>
        @yield('content')
    </div>
@endsection
