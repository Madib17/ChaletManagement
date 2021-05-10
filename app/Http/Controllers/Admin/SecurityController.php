<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SecurityController extends Controller
{
    public function edit(){
        return view('admin.account.security')->with('users',User::all());
    }

    public function update(Request $request,User $user){
        $request->validate([
            'password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'password_confirmation' => ['same:new_password'],
        ]);

    }

}
