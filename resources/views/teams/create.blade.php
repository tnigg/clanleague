@extends('layouts.app')
@section('content')

    <div class="min-h-screen bg-gray-100">{{-- WATCH OUT FOR MIN-H-FULL --}}
        <div class="mt-1 bg-gray-100 border-b border-gray-300 shadow">
            <div class="p-2 text-center">
                <h1 class="text-3xl font-extrabold text-green-900 ">Create a new team</h1>
                <p>You can only have one team</p>
            </div>
        </div>

        {{-- !!!!! CREATE CARD !!!!! --}}
        <div class="max-w-xl mx-auto">
            <div class="py-4 shadow-md bg-gray-50">
                {{-- Display Errors --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('teams.store') }}" method="POST" id="createTeamForm">
                    @csrf
                    <div class="flex px-4 mt-8 space-x-8 ">

                        {{-- TEAM NAME --}}
                        <div class="w-2/3">
                            <p class="font-semibold text-gray-600 uppercase">Team Name</p>
                            <input
                                class="w-full p-0 pt-1 pb-1 placeholder-gray-300 border-t-0 border-l-0 border-r-0 bg-gray-50"
                                placeholder="Name" type="text" name="name">
                        </div>

                        {{-- TEAM TAG --}}
                        <div class="w-1/3">
                            <p class="font-semibold text-gray-600 uppercase" uppercase>Team tag</p>
                            <input
                                class="w-full p-0 pt-1 pb-1 placeholder-gray-300 border-t-0 border-l-0 border-r-0 bg-gray-50"
                                placeholder="Tag)" type="text" name="tag">
                        </div>
                    </div>

                    {{-- HOMEPAGE --}}
                    <div class="flex px-4 space-x-8 mt-14 ">
                        <div class="w-2/3">
                            <p class="font-semibold text-gray-600 uppercase">Homepage</p>
                            <input
                                class="w-full p-0 pt-1 pb-1 placeholder-gray-300 border-t-0 border-l-0 border-r-0 bg-gray-50"
                                placeholder="www." type="text" name="homepage">
                        </div>

                        {{-- !!!!!! COUNTRY DROPDOWN LIST --}}
                        <div class="w-1/3">
                            <div class="">
                                <p class="font-semibold text-gray-600 uppercase">Country</p>
                                <select class="w-full py-1 text-gray-600 border-t-0 border-l-0 border-r-0 bg-gray-50"
                                    name="country" id="country">
                                    <option value="austria">Austria</option>
                                    <option value="austria">South-Korea</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- FILE UPLOAD --}}
                    <div class="relative overflow-hidden border-t border-b border-gray-600 mt-14">
                        <x-teams.upload-logo-button />
                        <input class="absolute block opacity-0 cursor-pointer pin-r pin-t" type="file" name="" multiple>
                    </div>

                    {{-- BUTTONS --}}
                    @include('components.teams.create-team-button')

                </form>
            </div>
        </div>
    </div>
@endsection
