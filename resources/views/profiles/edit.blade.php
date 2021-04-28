@extends('layouts.app')
@section('content')
    <div class="min-h-screen bg-gray-100">{{-- WATCH OUT FOR MIN-H-FULL --}}
        <div class="mt-1 bg-gray-100 border-b border-gray-300 shadow">
            <div class="p-2 text-center">
                <h1 class="text-3xl font-extrabold text-green-900 ">Edit Profile</h1>
            </div>
        </div>

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

                <form action="{{ route('profiles.update', $user) }}" method="POST" id="updateProfileForm"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="flex px-4 mt-8 space-x-8 ">

                        {{-- Username --}}
                        <div class="w-1/2">
                            <p class="font-semibold text-gray-600 uppercase">Username</p>
                            <input
                                class="w-full p-0 pt-1 pb-1 placeholder-gray-300 border-t-0 border-l-0 border-r-0 bg-gray-50"
                                placeholder="Name" type="text" name="name" value="{{ $user->name }}">
                        </div>

                        {{-- Email --}}
                        <div class="w-1/2">
                            <p class="font-semibold text-gray-600 uppercase" uppercase>Email</p>
                            <input
                                class="w-full p-0 pt-1 pb-1 placeholder-gray-300 border-t-0 border-l-0 border-r-0 bg-gray-50"
                                placeholder="Email" type="text" name="email" value={{ $user->email }}>
                        </div>
                    </div>

                    {{-- Battletag --}}
                    <div class="flex px-4 space-x-8 mt-14 ">
                        <div class="w-1/2">
                            <p class="font-semibold text-gray-600 uppercase">Blizzard Battletag</p>
                            <input
                                class="w-full p-0 pt-1 pb-1 placeholder-gray-300 border-t-0 border-l-0 border-r-0 bg-gray-50"
                                placeholder="username#1234" type="text" name="battletag" value="{{ $user->battletag }}">
                        </div>

                        {{-- !!!!!! Race DROPDOWN LIST --}}
                        <div class="w-1/2">
                            <div class="">
                                <p class="font-semibold text-gray-600 uppercase">Race</p>
                                <select class="w-full py-1 text-gray-600 border-t-0 border-l-0 border-r-0 bg-gray-50"
                                    name="race" id="race">
                                    <option value="Protoss">Protoss</option>
                                    <option value="Terran">Terran</option>
                                    <option value="Zerg">Zerg</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- File upload --}}
                    <p class="px-4 mt-10 font-semibold text-gray-600 uppercase">Upload Avatar</p>
                    <div class="px-4 py-2 mt-1 border-t border-b border-gray-600">
                        <input class="block w-full cursor-pointer pin-r pin-t" type="file" name="filename">
                    </div>

                    {{-- BUTTONS --}}
                    <div class="flex justify-between w-full px-3 sm:px-8 mt-14">
                        <div>
                            <a href="{{ route('profiles.index', $user) }}"
                                class="px-3 py-1 font-semibold text-gray-700 bg-gray-200 border shadow border-gray-50 rounded-xl">
                                <- Back </a>
                        </div>

                        <div>
                            <a href="{{ route('profiles.update', $user) }}"
                                onclick="event.preventDefault();document.getElementById('updateProfileForm').submit();"
                                type="submit"
                                class="px-3 py-1 font-semibold bg-green-400 border shadow rounded-xl text-green-50">
                                Edit Profile
                            </a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


@endsection
