@extends('layout.app')

@section('main')
    <div class="h-full w-full bg-circuit">
        <div class="absolute flex w-full gap-5 top-5 right-5 font-bold text-red-700 justify-end">
            @if (Route::currentRouteName() !== 'welcome')
                <a class="bg-white px-4 rounded bg-opacity-70 hover:bg-opacity-95" href="{{ route('welcome') }}">
                    Welcome
                </a>
            @else
                <a class="bg-white px-4 rounded bg-opacity-70 hover:bg-opacity-95" href="{{ route('register') }}">
                    Register
                </a>

                <a class="bg-white px-4 rounded bg-opacity-70 hover:bg-opacity-95" href="{{ route('login') }}">
                    Login
                </a>
            @endif
            @if(\Illuminate\Support\Facades\Auth::user())
                <logout-button action="{{ route('logout') }}" button-class="bg-white px-4 rounded bg-opacity-70 hover:bg-opacity-95 font-bold">@csrf</logout-button>
            @endif
        </div>

        @yield('content')
    </div>
@endsection
