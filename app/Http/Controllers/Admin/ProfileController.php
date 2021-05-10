<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit(){
        return view('admin.account.profile');
    }

    public function update(Request $request,User $user){
         /* dd($request->all()); */
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required'
        ]);

        $user = $user->update($request->all());


        // $data = $request->only('name','email');

        // $user->name = $data['name'];
        // $user->email = $data['email'];
        // $user->save();
        
        // $user->update($data);

        // $user->update($request->only(['name','email']));

        return redirect(route('admin.account.profile'));
    }
}
