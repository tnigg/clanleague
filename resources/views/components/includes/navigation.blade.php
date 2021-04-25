<div
    class="flex flex-col-reverse items-center justify-between mx-auto bg-green-500 border-b border-green-200 shadow-lg lg:items-end lg:flex-row">
    <div>
        <img class="w-full border-green-200 opacity-90 lg:w-auto lg:border-r lg:max-h-44"
            src="{{ asset('img/layout/bwcl_logo.png') }}" alt="">
    </div>
    <nav class="flex items-center justify-between w-full px-1 space-x-4 lg:px-4">
        <div class="px-3 py-1 space-x-2 lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z" />
            </svg>
        </div>
        <div class="hidden px-3 space-x-4 font-semibold text-green-100 uppercase lg:mb-2 lg:space-x-6 lg:flex">
            <a href="{{ route('index') }}"
                class="px-2 py-1 transition ease-in-out bg-green-400 border-b border-green-300 rounded-sm shadow-lg hover:border-green-700 duration-400 hover:bg-green-50 hover:text-green-400">Home</a>
            <a href=""
                class="px-2 py-1 transition ease-in-out bg-green-400 border-b border-green-300 rounded-sm shadow-lg hover:border-green-700 duration-400 hover:bg-green-50 hover:text-green-400">Leagues</a>
            <a href=""
                class="px-2 py-1 transition ease-in-out bg-green-400 border-b border-green-300 rounded-sm shadow-lg hover:border-green-700 duration-400 hover:bg-green-50 hover:text-green-400">Teams</a>
            <a href="{{ route('players.index') }}"
                class="px-2 py-1 transition ease-in-out bg-green-400 border-b border-green-300 rounded-sm shadow-lg hover:border-green-700 duration-400 hover:bg-green-50 hover:text-green-400">Players</a>
            <a href="{{ route('players.index') }}"
                class="px-2 py-1 transition ease-in-out bg-green-400 border-b border-green-300 rounded-sm shadow-lg hover:border-green-700 duration-400 hover:bg-green-50 hover:text-green-400">Rules</a>
            <a href="{{ route('players.index') }}"
                class="px-2 py-1 transition ease-in-out bg-green-400 border-b border-green-300 rounded-sm shadow-lg hover:border-green-700 duration-400 hover:bg-green-50 hover:text-green-400">Stats</a>
        </div>
        <div
            class="px-3 py-4 space-x-2 font-semibold text-green-700 lg:mb-2 lg:py-1 lg:space-x-4 lg:space-x-6 lg:flex ">

            @auth
                <x-drop-down-button />

            @endauth

            @guest
                <a href="{{ route('login') }}"
                    class="px-2 py-1 transition ease-in-out border-b border-green-700 shadow-lg bg-green-50 hover:border-green-300 duration-400 hover:bg-green-400 hover:text-green-50">Login</a>
                <a href="{{ route('register') }}"
                    class="px-2 py-1 transition ease-in-out border-b border-green-700 shadow-lg bg-green-50 hover:border-green-300 duration-400 hover:bg-green-400 hover:text-green-50">Register</a>
            @endguest

        </div>
    </nav>
</div>
