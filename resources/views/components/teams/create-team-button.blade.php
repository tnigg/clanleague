<div class="flex justify-between w-full px-3 sm:px-8 mt-14">

    <div>
        <a href="{{ route('index') }}"
            class="px-3 py-1 font-semibold text-gray-700 bg-gray-200 border shadow border-gray-50 rounded-xl">
            <- Back </a>
    </div>

    <div>
        <a href="{{ route('teams.store') }}"
            onclick="event.preventDefault();document.getElementById('createTeamForm').submit();" type="submit"
            class="px-3 py-1 font-semibold bg-green-400 border shadow rounded-xl text-green-50">
            Create Team->
        </a>
    </div>

</div>
