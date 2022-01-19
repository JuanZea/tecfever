<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>{{ config('app.name') }}</title>
    </head>
    <body class="font-dongle">
        <div class="h-screen w-screen bg-red-500 flex justify-center items-center">
            <h1 class="shadow-lg cursor-pointer text-white text-6xl font-bungee opacity-80 hover:scale-150 hover:opacity-100 duration-100">Welcome to TecFever</h1>
        </div>
    </body>
</html>
