@extends('layouts.app')
@section('content')

    <div class="mt-1 bg-gray-100 border-b border-gray-300 shadow">
        <div class="p-2 text-center">
            <div>
                <h1 class="text-3xl font-extrabold text-green-900 ">{{ $team->name }}</h1>
                <span>
                    {{ $team->tag }}
                </span>
            </div>
            @if (!Auth::user()->team_id)
                <div class="pb-4 mt-6">
                    <nav>
                        <a href="{{ route('invites.join', $team) }}" class="p-2 bg-gray-700 rounded text-gray-50">Request
                            to
                            join</a>
                    </nav>
                </div>
            @endif

            @if (Auth::user()->team_id == $team->id)
                <p class="font-semibold text-blue-400">This is your Team</p>
            @endif
        </div>
    </div>

    <div class="text-center">
        <a href="{{ route('teams.requests') }}">Show join requests</a>
    </div>

    <div class="bg-gray-200 border-t border-b border-gray-300 shadow mt-7">
        <div class="p-2 text-center">
            <h1 class="text-xl font-extrabold text-gray-700 ">All Players from {{ $team->name }}</h1>
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
                        Needs to be fixed
                    </div>
                    <div class="w-1/2 my-auto overflow-hidden font-semibold text-gray-400 md:w-1/6 sm:w-1/4">
                        Details
                    </div>
                </div>
            @endforeach
        </div>
    </div>




@endsection
