@extends('layout.guest')

@section('content')
    <div class="h-full w-full flex">
        <div class="flex justify-center items-center flex-grow">
            <h1
                class="
                    select-none
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
