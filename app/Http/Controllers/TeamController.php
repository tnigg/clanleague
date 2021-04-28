<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Classes\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTeamRequest;

class TeamController extends Controller
{
    public function index() {
        $teams = Team::latest()->get();

        return view('teams.index', compact('teams'));
    }

    public function show(Team $team) {         
        $users = $team->users()->get();
        // dd($users);
        return view('teams.show', compact(['team', 'users']));
    }

    public function create() {
        return view('teams.create');
    }

    public function store(StoreTeamRequest $request) {  

        // Store new Team
        $team = Team::create($request->validated());        
        FileManager::uploadFile($request, $team, 'logos');

        // Get Logged in User and set is_manager and team_id
        $user = Auth::user(); 
        $user->update(['is_manager' => 1]);              
        $team->users()->save($user);          
        
        return redirect(route('index'));
    }  
}
