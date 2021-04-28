<div class="min-h-screen bg-gray-100">{{-- WATCH OUT FOR MIN-H-FULL --}}
    <div class="mt-1 bg-gray-100 border-b border-gray-300 shadow">
        <div class="p-2 text-center">
            @if ($user->id == Auth::user()->id)
                <h1 class="text-3xl font-extrabold text-green-900 ">Hello
                    @if ($user->team_id == 1)
                        {{ $user->team->tag }}{{ $user->name }}
                    @else
                        {{ $user->name }}
                    @endif
                </h1>
                <p>Your Profile</p>
                <div class="space-x-4">
                    @if (!$user->team)
                        <a href="">Join Team</a>
                    @else
                        <a href="">Your Team</a>
                    @endif
                    <a href="">Inbox</a>
                    <a href="{{ route('profiles.edit', $user) }}">Edit Profile</a>
                    <a href="">Add Blizzard Account</a>
                </div>
            @else
                @if ($user->team_id)
                    <h1 class="text-3xl font-extrabold text-green-900 ">{{ $user->team->tag }}{{ $user->name }}'s
                        Profile</h1>
                @else
                    <h1 class="text-3xl font-extrabold text-green-900 ">{{ $user->name }}'s
                        Profile</h1>
                @endif
                @if (!$user->team_id && Auth::user()->team_id != $user->team_id && Auth::user()->is_manager)
                    Invite Player to Team
                @endif
            @endif

        </div>
    </div>
