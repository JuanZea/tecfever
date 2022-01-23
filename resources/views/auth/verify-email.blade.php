@extends('layout.guest')

@section('content')
    <div class="h-full w-full flex flex-col justify-center items-center">
        <div class="bg-red-500 rounded-xl px-8 py-4 text-white flex flex-col gap-5 shadow">
            <mail-icon class="h-20 text-white"></mail-icon>
            <p class="text-xl">
                @if (session('status') == 'verification-link-sent')
                    A new email verification link has been emailed to you!
                @else
                    To access the page you must verify your email
                @endif
            </p>
            <form action="{{ route('verification.send') }}" method="POST">
                @csrf
                <button type="submit" class="button w-full bg-red-400 hover:bg-opacity-70 focus:ring-red-400 ring-offset-red-500 text-white">Resend verification email</button>
            </form>
        </div>
    </div>
@endsection()
