<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit(){
        return view('admin.account.profile');
    }

    public function update(Request $request,User $user){
        //   dd($request->all(),$user->all()); 
        $this->validate(request(), [
            'name' => 'required',
            'email' => ['required', Rule::unique('users')->ignore($user->id)],
        ]);

        $data = $request->only('name','email');

        // $user->name = $data['name'];
        // $user->email = $data['email'];
        // $user->save();
        
         $user->update($data);

        return redirect(route('admin.account.profile'));
    }
}
