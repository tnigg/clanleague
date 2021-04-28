@extends('layouts.app')

@section('content')
    <div class="mt-1 bg-gray-100 border-b border-gray-300 shadow">
        <div class="p-2 text-center">
            <h1 class="text-3xl font-extrabold text-green-900 ">All Teams</h1>
            <p>Sorted by latest teams</p>
        </div>
    </div>

    <div>
        <div class="mx-auto mt-1 bg-gray-100 border-t rounded-lg max-w-7xl">
            <div
                class="flex flex-wrap justify-start py-2 overflow-hidden font-semibold text-center border-b sm:justify-evenly">
                <div class="w-1/2 overflow-hidden md:w-1/6 sm:w-1/4">
                    <div>
                        Team Name
                    </div>
                </div>
                <div class="hidden overflow-hidden md:block sm:w-1/4 md:w-1/6">
                    Division
                </div>
                <div class="hidden overflow-hidden sm:block sm:w-1/4 md:w-1/6">
                    Homepage
                </div>
                <div class="hidden overflow-hidden md:w-1/6 lg:block">
                    Manager
                </div>
                <div class="hidden overflow-hidden md:w-1/6 lg:block">
                    Recruiting
                </div>
                <div class="w-1/2 overflow-hidden md:w-1/6 sm:w-1/4">
                    Details
                </div>
            </div>
            {{-- Users ab hier --}}
            @foreach ($teams as $team)
                <div class="flex flex-wrap py-2 text-center text-gray-800 bg-white border-b sm:justify-evenly">
                    <div class="w-1/2 my-auto md:w-1/6 sm:w-1/4">
                        <div>
                            <p class="font-semibold">{{ $team->name }}</p>
                            <p class="text-xs font-semibold tracking-wide text-gray-500">
                                {{ $team->tag }}
                            </p>
                        </div>
                    </div>
                    <div class="hidden my-auto overflow-hidden md:w-1/6 min-w-min md:block sm:w-1/4">
                        <p> Division 2a</p>
                        <p class="text-sm font-semibold tracking-wide text-gray-500">4th</p>

                    </div>
                    <div class="hidden my-auto ml-0 overflow-hidden md:w-1/6 sm:w-1/4 sm:block">

                        {{ $team->homepage }}
                    </div>
                    <div class="hidden my-auto overflow-hidden md:w-1/6 lg:block">
                        @foreach ($team->users->where('is_manager', 1) as $user)
                            {{ $user->name }}
                        @endforeach
                    </div>
                    <div class="hidden my-auto overflow-hidden md:w-1/6 lg:block">
                        Yes
                    </div>
                    <div class="w-1/2 my-auto overflow-hidden font-semibold text-gray-400 md:w-1/6 sm:w-1/4">
                        <a href="{{ route('teams.show', $team->name) }}">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>






@endsection
