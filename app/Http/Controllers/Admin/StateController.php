<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    public function create(){
        return view('admin.address.state');
    }

    public function store(Request $request){

        $this->validate(request(),[
            'name' => 'required|unique:states'
        ]);

        State::create($request->only('name'));
        /* State::create([
            'name' => $request->name
        ]); */
        return redirect(route('admin.address.state'));
    }
}
