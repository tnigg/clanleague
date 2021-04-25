@extends('layouts.app')
@section('content')
    <div class="mt-1 bg-gray-100 border-b border-gray-300 shadow">
        <div class="p-2 text-center">
            <h1 class="text-3xl font-extrabold text-green-900 ">Create a new team</h1>
            <p>You can only have one team</p>
        </div>
    </div>
    <div class="max-w-xl mx-auto">
        <div class="py-4 bg-gray-50">
            <form action="">
                @csrf
                <div class="flex px-4 space-x-8 ">
                    <div class="w-2/3">
                        <p class="font-semibold text-gray-600 uppercase">Team Name</p>
                        <input class="w-full p-0 pt-1 pb-1 placeholder-gray-300 border-t-0 border-l-0 border-r-0 bg-gray-50"
                            placeholder="Name" type="text">
                    </div>

                    <div class="w-1/3">
                        <p class="font-semibold text-gray-600 uppercase" uppercase>Team tag</p>
                        <input class="w-full p-0 pt-1 pb-1 placeholder-gray-300 border-t-0 border-l-0 border-r-0 bg-gray-50"
                            placeholder="Tag)" type="text">
                    </div>
                </div>


                <div class="flex px-4 mt-8 space-x-8 ">
                    <div class="w-2/3">
                        <p class="font-semibold text-gray-600 uppercase">Homepage</p>
                        <input class="w-full p-0 pt-1 pb-1 placeholder-gray-300 border-t-0 border-l-0 border-r-0 bg-gray-50"
                            placeholder="www." type="text">
                    </div>

                    <div class="w-1/3">
                        <div class="relative mt-4 mb-4 overflow-hidden">
                            <button class="inline-flex w-full py-2 ml-2 font-bold text-gray-600">
                                <span class="">Upload Logo</span>
                            </button>
                            <div>test</div>
                            <input class="absolute block opacity-0 cursor-pointer pin-r pin-t" type="file" name="" multiple>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
