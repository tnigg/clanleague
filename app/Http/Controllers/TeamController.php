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

              
        
        $team = Team::create([
            'name' => $request->name,
            'tag' => $request->tag,
            'homepage' => $request->homepage,     
            'country' => $request->country,             
        ]);
        
        Auth::user()->update([
            'is_manager' => 1,
        ]); 
        
         
        
    }
}
