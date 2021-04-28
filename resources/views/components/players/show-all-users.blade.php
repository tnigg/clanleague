<div class="mt-1 bg-gray-100 border-b border-gray-300 shadow">
    <div class="p-2 text-center">
        <h1 class="text-3xl font-extrabold text-green-900 ">All Players</h1>
        <p>Sorted by latest players</p>
    </div>
</div>

<div>
    <div class="mx-auto mt-1 bg-gray-100 border-t rounded-lg max-w-7xl">
        <div
            class="flex flex-wrap justify-start py-2 overflow-hidden font-semibold text-center border-b sm:justify-evenly">
            <div class="w-1/2 overflow-hidden md:w-1/6 sm:w-1/4">
                <div>
                    Username
                </div>
            </div>
            <div class="hidden overflow-hidden md:block sm:w-1/4 md:w-1/6">
                Team
            </div>
            <div class="hidden overflow-hidden sm:block sm:w-1/4 md:w-1/6">
                Race
            </div>
            <div class="hidden overflow-hidden md:w-1/6 lg:block">
                Wins / Loss
            </div>
            <div class="hidden overflow-hidden md:w-1/6 lg:block">
                Winrate
            </div>
            <div class="w-1/2 overflow-hidden md:w-1/6 sm:w-1/4">
                Info
            </div>
        </div>
        {{-- Users ab hier --}}
        @foreach ($users as $user)
            <div class="flex flex-wrap py-2 text-center text-gray-800 bg-white border-b sm:justify-evenly">
                <div class="w-1/2 my-auto md:w-1/6 sm:w-1/4">
                    <div>
                        <p class="font-semibold">{{ $user->name }}</p>
                        <p class="text-xs font-semibold tracking-wide text-gray-500">
                            {{ $user->email }}
                        </p>
                    </div>
                </div>
                <div class="hidden my-auto overflow-hidden md:w-1/6 min-w-min md:block sm:w-1/4">
                    @if ($user->team_id)
                        <p> {{ $user->team->name }}</p>
                        <p class="text-sm font-semibold tracking-wide text-gray-500">{{ $user->team->tag }}</p>
                    @else
                        <p class="">No Team</p>
                    @endif

                </div>
                <div class="hidden my-auto ml-0 overflow-hidden md:w-1/6 sm:w-1/4 sm:block">
                    {{ $user->race }}
                </div>
                <div class="hidden my-auto overflow-hidden md:w-1/6 lg:block">
                    <span class="text-green-500">{{ $user->wins }}</span> / <span
                        class="text-red-500">{{ $user->loss }}</span>
                </div>
                <div class="hidden my-auto overflow-hidden md:w-1/6 lg:block">
                    {{ $winRatio[$user->id] }} %
                </div>
                <div class="w-1/2 my-auto overflow-hidden font-semibold text-gray-400 md:w-1/6 sm:w-1/4">
                    <a href="{{ route('profiles.index', $user->name) }}">Details</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
