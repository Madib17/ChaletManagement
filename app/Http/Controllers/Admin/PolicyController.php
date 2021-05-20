<?php

namespace App\Http\Controllers\Admin;

use App\Models\Chalet;
use App\Models\Policy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function create(Chalet $chalet){
        return view('admin.policy.create')->with('chalet', $chalet);
    }

    public function store(Request $request,Chalet $chalet){
        $this->validate(request(),[
            'title' => 'required',
            'description' => 'required'
        ]);

        $request['chalet_id'] = $chalet->id;

        Policy::create($request->all());

        return redirect()->route('admin.chalet.show', ['chalet' => $chalet]);
    }

    public function edit(Chalet $chalet, Policy $policy){
        return view('admin.policy.edit')->with('chalet',$chalet)->with('policy',$policy);
    }
}
