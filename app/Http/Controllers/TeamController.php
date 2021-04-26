<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function create() {
        return view('teams.create');
    }
    public function store(Request $request) {        
        // Store new Team
        $team = new Team;
        $team->name = $request->name;        
        $team->tag = $request->tag;
        $team->homepage = $request->homepage;     
        $team->country = $request->country; 
        $team->save();        

        // Get Logged in User and set is_manager and team_id
        $user = Auth::user()->first(); 
        $user->update(['is_manager' => 1]);              
        $team->users()->save($user);  
        Auth::setUser($user);
        return redirect(route('index'));
    }
}
