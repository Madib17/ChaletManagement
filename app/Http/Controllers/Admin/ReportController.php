<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Review;

class ReportController extends Controller
{
    public function index(){
        
        $report = Report::all();

            // dd($data->all());

        // return view('admin.report.index')->with('reports',Report::all())->with('reviews',Review::all());

        //return view('admin.report.index', $data);

        return view('admin.report.index')->with('reports', $report);
    }

    public function destroy(Report $report){
        $report->delete();
        $report->review->delete();

        return redirect()->back();
    }

}
