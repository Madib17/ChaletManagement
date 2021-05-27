<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chalet;
use App\Models\State;
use App\Models\City;
use App\Models\Accommodation;
use App\Models\District;
use App\Models\Policy;
use App\Models\Room;
use App\Models\Photo;
use App\Models\Bedroom;
use App\Models\Bed;
use App\Models\Title;

class ChaletController extends Controller
{
    public function index(){
        return view('admin.chalet.list-chalet')->with('chalets',Chalet::all());
    }

    public function showMyChalet(){
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
        return redirect()->action([ChaletController::class, 'createLocation'],['chalet' => $chalet->id]);
        /* return redirect(route('admin.chalet.edit',$chalet->id)); */
        /* return view('admin.chalet.location')->withId($chalet_id)->withName($name); */
        
    }

    public function createLocation(Chalet $chalet){
        return view('admin.chalet.location')
        ->with('states',State::all())
        ->with('cities',City::all())
        ->with('districts',District::all())
        ->with('chalet',$chalet);
    }

    public function storeLocation(Request $request, Chalet $chalet){
        //dd($request->all());
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
        $chalet->save();

        // $chalet->update($data);
        return redirect()->action([ChaletController::class, 'createAccommodation'],['chalet' => $chalet->id]);
    }

    public function createAccommodation(Chalet $chalet){
        return view('admin.chalet.accommodation')->with('chalets',$chalet->id)->with('accommodations',Accommodation::all());
    }

    public function storeAccommodation(Request $request,Chalet $chalet){
     
        $chalet->accommodations()->sync( $request->accommodations );

        return redirect()->action([ChaletController::class, 'createPolicy'],['chalet' => $chalet->id]);
        }

    public function createPolicy(Chalet $chalet){
        return view('admin.chalet.policy')->with('chalets',$chalet);
    }

    public function storePolicy(Request $request, Chalet $chalet){
        $this->validate(request(),[
            'title' => 'required',
            'description' => 'required'
        ]);

        $request['chalet_id'] = $chalet->id;
        
        Policy::create($request->all());

        return redirect()->action([ChaletController::class, 'createRoom'],['chalet' => $chalet->id]);

    }

    public function createRoom(Chalet $chalet){
        return view('admin.chalet.room')->with('chalets',$chalet)->with('beds',Bed::all())->with('bedrooms',Bedroom::all());
    }

    public function storeRoom(Request $request, Chalet $chalet){
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
        // dd($request->all());

        return redirect()->action([ChaletController::class, 'createPhoto'],['chalet' => $chalet->id]);

    }

    public function createPhoto(Chalet $chalet){
        return view('admin.chalet.photo')->with('chalets', $chalet);
    }

    public function storePhoto(Request $request,Chalet $chalet){
        
        if ($request->hasFile('photo')) {
            $fileName = $chalet->id.'-'.date("Y-m-d").'.'.$request->photo->getClientOriginalExtension();
            Storage::disk('public')->put($fileName,File::get($request->photo));
            Photo::insert([
                'name' => $fileName,
                'chalet_id' => $chalet->id,
            ]);
        }

        return redirect()->route('admin.chalet.show', ['chalet' => $chalet->id]);
    }

    public function show(Chalet $chalet){
        return view('admin.chalet.show')->with('chalet',$chalet)->with('title',Title::all());
    }

    public function edit(Chalet $chalet){
        return view('admin.chalet.edit')->with('chalet',$chalet)->with('districts',District::all())->with('cities',City::all())->with('states',State::all())->with('accommodations',Accommodation::all());
    }

    public function update(Request $request, Chalet $chalet){
        $this->validate(request(),[
            'name' => 'required',
            'description' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'poscode' => 'required',
            'district_id' => 'required',
        ]);

        $chalet->update($request->all());
        $chalet->accommodations()->sync($request->accommodations);

         return redirect()->route('admin.chalet.show', ['chalet' => $chalet]);
    }

    public function destroy(Chalet $chalet){
        $chalet->delete();

        return redirect()->route('admin.chalet.my-chalet');

    }
}
