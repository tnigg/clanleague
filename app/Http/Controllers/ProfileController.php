<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Classes\FileManager;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(User $user) {           
        return view('profiles.index', compact('user')); 
    }

    public function edit(User $user) {
        return view('profiles.edit', compact('user'));
    }

    public function update(Request $request, User $user) {        
        $user->update($request->all());   
         FileManager::uploadFile($request, $user, 'avatars');  
    }    
}
