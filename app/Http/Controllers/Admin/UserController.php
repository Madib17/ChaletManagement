<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('admin.user.list-user')->with('users',User::all());
    }

    public function create(){
        return view('admin.user.add-user');
    }

    public function store(Request $request){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);
        

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back();
    }
}
