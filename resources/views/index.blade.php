@extends('layouts.app')

@section('content')
    <x-includes.feature-header />
    <div
        class="container w-full p-20 m-4 mx-auto my-16 text-center bg-white border-2 border-gray-300 border-dashed h-96 rounded-xl md:bg-green-400">
        <p class="mt-20 italic tracking-tighter text-gray-500 text-md title-font">
            -- Content goes here --
        </p>
    </div>
@endsection








{{-- <form action="/logout" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form> --}}
</body>

</html>
