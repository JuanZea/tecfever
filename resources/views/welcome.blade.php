@extends('layout.guest')

@section('content')
    <div class="h-full w-full flex flex-col">
        
        <a href="{{ route('login') }}">
            Login
        </a>

        <a href="{{ route('login') }}">
            Register
        </a>

        <div class="flex justify-center items-center flex-grow">
            <h1
                class="
                    px-4
                    bg-red-500 
                    rounded-md 
                    cursor-pointer
                    text-white
                    text-6xl
                    font-bungee
                    opacity-80
                    hover:scale-150
                    hover:opacity-100
                    duration-100"
            >
                Welcome to TecFever
            </h1>
        </div>
    </div>
@endsection()
