<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Review;

class ReportController extends Controller
{
    public function index(){
        return view('admin.report.index')->with('reports',Report::all());
    }


}
