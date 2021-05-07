<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chalet;
use App\Models\State;
use App\Models\City;
use App\Models\District;

class ChaletController extends Controller
{
    public function index(){
        return view('admin.chalet.list-chalet')->with('chalets',Chalet::all());
    }

    public function show(){
        return view('admin.chalet.my-chalet')->with('chalets',Chalet::where('user_id',auth()->id())->get());
    }

    public function create(){
        return view('admin.chalet.add-chalet');
    }

    public function store(Request $request){
        
        /* dd($request->all()); */
        $this->validate(request(),[
            'name' => 'required|unique:chalets',
            'description' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $chalet = Chalet::create([
            'name' => $request->name,
            'description' => $request->description,
            'phone' => $request->phone,
            'email' => $request->email,
            'user_id' => auth()->id()
        ]);
        /* Chalet::create($request->only('name','description','phone','email','user_id')); */
        $id = auth()->id();
        /* $chalet = Chalet::select('id')->where('user_id',$id)->orderBy('id','desc')->first()->get(); */

        /* dd($chalet); */ 
        return redirect()->action([ChaletController::class, 'edit'],['chalet' => $chalet->id]);
        /* return redirect(route('admin.chalet.edit',$chalet->id)); */
        /* return view('admin.chalet.location')->withId($chalet_id)->withName($name); */
        
    }

    public function edit(Chalet $chalet){
        return view('admin.chalet.location')
        ->with('states',State::all())
        ->with('cities',City::all())
        ->with('districts',District::all())
        ->with('chalet',$chalet);
    }

    public function update(Request $request, Chalet $chalet){
         $this->validate(request(),[
            'address' => 'required|unique:chalets',
            'state' => 'required',
            'city' => 'required',
            'district_id' => 'required',
            'poscode' => 'required'
        ]); 

         
        $data = $request->only('address','poscode','district_id');

        $chalet->address = $data['address'];
        $chalet->poscode = $data['poscode'];
        $chalet->district_id = $data['district_id'];

        $chalet->update($data);
        
         return redirect()->back();
    }
}
