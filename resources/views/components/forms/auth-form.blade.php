<form class="flex flex-col" action="{{ $action }}" method="POST">
    @csrf
    <div class="bg-red-300 bg-opacity-95 flex flex-col p-7 rounded-xl shadow-lg gap-5 border border-gray-300">
        <h1 class="text-gray-700 text-3xl font-bungee text-center">{{ $type }}</h1>
        @if($type === 'login')
            <c-input id="email" type="email" label="Email" placeholder="example@email.com"></c-input>
            <c-input id="password" type="password" label="Password"></c-input>
        @else
            <c-input id="name" type="text" label="Name"></c-input>
            <c-input id="email" type="email" label="Email" placeholder="example@email.com"></c-input>
            <c-input id="password" type="password" label="Password"></c-input>
            <c-input id="password_confirmation" type="password" label="Password Confirm"></c-input>
        @endif
        <button type="submit" class="button ring-offset-red-300">
            Continue
        </button>
        <div class="flex justify-center">
            <a href="{{ route('welcome') }}"
                    class="bg-gray-700 bg-opacity-50 hover:bg-opacity-70 text-white px-4 py-2 rounded-full ring-offset-red-300">
                <home-icon class="h-4 text-white"/>
            </a>
        </div>
    </div>
</form>
