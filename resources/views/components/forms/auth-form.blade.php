<form class="flex flex-col" action="{{ $action }}" method="POST">
    @csrf
    <div class="bg-red-500 bg-opacity-90 flex flex-col p-7 rounded-xl shadow-lg gap-5 border border-gray-300">
        <h1 class="text-white text-3xl font-bungee text-center">{{ $type }}</h1>

        @if($type === 'register')
            <x-partials.register-inputs></x-partials.register-inputs>
        @else
            <x-partials.login-inputs></x-partials.login-inputs>
        @endif

        <button type="submit"
                class="button bg-red-400 hover:bg-opacity-70 focus:ring-red-400 ring-offset-red-500 text-white">
            Continue
        </button>
    </div>
</form>
