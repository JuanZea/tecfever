@extends('layout.guest')

@section('content')
    <div class="h-full w-full flex flex-col justify-center items-center">
        <div class="flex flex-col">
            <h1 class="bg-green-500 bg-opacity-95 rounded-t-md px-4 text-gray-700 text-3xl font-bungee self-start">Login</h1>
            <div class="bg-green-500 bg-opacity-95 flex flex-col p-7 rounded-md rounded-tl-none shadow">
                <c-input label="Email" placeholder="example@email.com"></c-input>
                <c-input label="Password"></c-input>
                <button type="button" class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gray-700 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">
                    Continue
                </button>
            </div>
        </div>
    </div>
@endsection()
