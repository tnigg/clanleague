@extends('layouts.app')
@section('content')

    <div class="mt-1 bg-gray-100 border-b border-gray-300 shadow">
        <div class="p-2 text-center">
            <div>
                <h1 class="text-3xl font-extrabold text-green-900 ">Join Requests</h1>
            </div>

            <div>
                @foreach ($users as $user)
                    {{ $user['name'] }}
                    <a href="{{ route('invites.accept', $user) }}">Accept</a>
                @endforeach
            </div>

            <div>

            </div>
        @endsection
