<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        
        $users = User::latest()->take(15)->get();    
        // foreach($users as $user) {
        //     if($gamesPlayed = $user->wins + $user->loss > 0) {
        //         $winRatio[$user->id] = round(($user->wins / $gamesPlayed) * 100, 2);  
        //     }            
                         
        // } 
        // User::getWinrate($users);  
          
        return view('players.index', compact(['users']));
    }

    
}
