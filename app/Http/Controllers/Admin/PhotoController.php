<?php

namespace App\Http\Controllers\Admin;

use App\Models\Chalet;
use App\Models\Photo;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create(Chalet $chalet){
        return view('admin.photo.create')->with('chalet', $chalet);
    }

    public function store(Request $request,Chalet $chalet){
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

    
}
