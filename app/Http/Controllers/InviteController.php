<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Invite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InviteController extends Controller
{
    public function store($team) {
        $team = Team::where('id', $team)->first();
        $user = Auth::user();

        Invite::create([
            'inviteable_id' => $team->id,
            'inviteable_type' => 'App\Models\Team',
            'sender_id' => $user->id,
            'receiver_id' => $team->id,
        ]);       
    }
    
    public function showRequests() {
        $requests = Team::where('id', Auth::user()->team_id)->with('invites')->get();
        $users = collect(new User);

    //collect users for each invite
       foreach($requests as $request) {
           foreach($request->invites as $invite) {
               if(!($invite->accepted && $invite->declined == 0)) {                  
                $users->add(User::where('id', $invite->sender_id)->first());   
               }                         
           }
       }       
        return view('teams.requests', compact(['users']));  
    }


    public function accept(User $user) {        
        $invite = Invite::where('sender_id', $user->id)->first();
        $invite->accepted = 1;
        $invite->save();

        $user = User::where('id', $user->id)->first();
        $user->team_id = Auth::user()->team->id;
        $user->save();        
    }
}
