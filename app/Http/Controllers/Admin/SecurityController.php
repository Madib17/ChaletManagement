<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\Hash;
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
            'currentPassword' => ['required', new MatchOldPassword],
            'newPassword' => ['required'],
            'confirmPassword' => ['same:newPassword'],
        ]);

        $user->update([
            'password' => Hash::make($request->newPassword),
        ]);

        return redirect()->back();
    }

}
