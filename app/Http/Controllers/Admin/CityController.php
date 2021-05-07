<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;

class CityController extends Controller
{
    public function create(){
        return view('admin.address.city')->with('states',State::all());
    }

    public function store(Request $request){

        $this->validate(request(),[
            'name' => 'required|unique:cities',
            'state_id' => 'required'
        ]);

        City::create([
            'name' => $request->name,
            'state_id' => $request->state_id
        ]);

        return view('admin.address.city')->with('states',State::all());
    }
}
