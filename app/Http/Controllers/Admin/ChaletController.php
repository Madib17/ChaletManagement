<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChaletController extends Controller
{
    public function index(){
        return view('admin.chalet.list-chalet');
    }

    public function show(){
        return view('admin.chalet.my-chalet');
    }

    public function create(){
        return view('admin.chalet.add-chalet');
    }

    public function store(){
        return view('admin.chalet.location');
        
    }

    public function edit(){
        return view('admin.chalet.accommodation');
    }

    public function storeAccommodation(){
        return view('admin.chalet');
    }
}
