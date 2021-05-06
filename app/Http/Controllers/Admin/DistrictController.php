<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\State;
use App\Models\City;

class DistrictController extends Controller
{
    public function create(){
        return view('admin.address.district')->with('states',State::all())->with('cities',City::all());
    }
    
    public function store(Request $request){

       /* dd($request->all()); */
        $this->validate(request(),[
            'name' => 'required|unique:districts',
            'city_id' => 'required'
        ]);

        District::create($request->all());
/* 
        $district->create([
            'name' => $request->name,
            'city_id' => $request->city_id
        ]); */

        return redirect()->back();
    }
}

