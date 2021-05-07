<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function index(){
        return view('admin.accommodation.accommodation');
    }

    public function create(){
        return view('admin.accommodation.add-accommodation');
    }

    public function store(){
        
    }

    
}
