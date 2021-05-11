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
            'currentPassword' => ['required', new MatchOldPassword],
            'newPassword' => ['required'],
            'confirmPassword' => ['same:new_password'],
        ]);

        $data = request()->only(['currentPassword', 'newPassword', 'confirmPassword']);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->newPassword)]);

        return redirect(route('admin.user.profile'));
    }

}
