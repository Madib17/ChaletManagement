<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\Chalet;
use App\Models\Bed;
use App\Models\Bedroom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function create(Chalet $chalet){
        return view('admin.room.create')->with('chalet', $chalet)->with('bedrooms',Bedroom::all())->with('beds',Bed::all());
    }

    public function store(Request $request, Chalet $chalet){
        $this->validate(request(),[
            'bedroom_id' => 'required',
            'bed_id' => 'required',
            'adult' => 'required',
            'child' => 'required',
            'price' => 'required',
            'size' => 'required',
            'detail' => 'required',
        ]);

        $request['chalet_id'] = $chalet->id;

        Room::create($request->all());

        return redirect()->route('admin.chalet.show', ['chalet' => $chalet]);
    }

    public function edit(Chalet $chalet,Room $room){
        return view('admin.room.edit')->with('chalet', $chalet)->with('room',$room)->with('bedrooms',Bedroom::all())->with('beds',Bed::all()); 
    }


    
}
