<div class="inline-block group">
    <button
        class="flex items-center px-3 py-1 border-b border-green-700 rounded-sm outline-none hover:border-green-50 hover:bg-green-300 bg-green-50 focus:outline-none min-w-32 hover:text-green-50">
        <span class="flex-1 pr-1 text-sm font-semibold sm:text-base ">
            @if (Auth::user()->team_id)
                {{ Auth::user()->team->tag }} | {{ Auth::user()->name }}
            @else
                {{ Auth::user()->name }}
            @endif
        </span>
        <span>
            <svg class="w-4 h-4 transition duration-150 ease-in-out transform fill-current group-hover:-rotate-180"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
        </span>
    </button>
    <ul
        class="absolute transition duration-150 ease-in-out origin-top transform scale-0 bg-white border rounded-sm cursor-pointer group-hover:scale-100 min-w-32">
        <li class="px-3 py-1 rounded-sm hover:bg-green-300 hover:text-green-50"><a
                href="{{ route('profiles.index', Auth::user()->name) }}">Profile</a></li>
        <li class="px-3 py-1 rounded-sm hover:bg-green-300 hover:text-green-50">Inbox</li>

        {{-- Check if user is in a team --}}
        @if (Auth::user()->team_id)
            <li class="px-3 py-1 rounded-sm hover:bg-green-300 hover:text-green-50"><a
                    href="{{ route('teams.show', Auth::user()->team->name) }}">Team</a></li>
        @else
            <li class="px-3 py-1 rounded-sm hover:bg-green-300 hover:text-green-50">Join Team</li>
            <li class="px-3 py-1 rounded-sm hover:bg-green-300 hover:text-green-50"><a
                    href="{{ route('teams.create') }}">Create Team</a></li>
        @endif
        <li
            class="px-3 py-1 text-gray-400 bg-gray-100 border-t-2 border-b-2 rounded-sm hover:bg-gray-200 hover:text-gray-600">
            <a href="{{ route('logout') }}" class=""
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="post" class="hidden">
                @csrf
            </form>
        </li>
    </ul>
</div>

<style>
    /* since nested groupes are not supported we have to use 
       regular css for the nested dropdowns 
    */
    li>ul {
        transform: translatex(100%) scale(0)
    }

    li:hover>ul {
        transform: translatex(101%) scale(1)
    }

    li>button svg {
        transform: rotate(-90deg)
    }

    li:hover>button svg {
        transform: rotate(270deg)
    }

    /* Below styles fake what can be achieved with the tailwind config
       you need to add the group-hover variant to scale and define your custom
       min width style.
         See https://codesandbox.io/s/tailwindcss-multilevel-dropdown-y91j7?file=/index.html
         for implementation with config file
    */
    .group:hover .group-hover\:scale-100 {
        transform: scale(1)
    }

    .group:hover .group-hover\:-rotate-180 {
        transform: rotate(180deg)
    }

    .scale-0 {
        transform: scale(0)
    }

    .min-w-32 {
        min-width: 8rem
    }

</style>
