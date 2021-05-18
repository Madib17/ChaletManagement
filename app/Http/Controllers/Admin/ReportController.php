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
        $data = DB::table('reports')
            ->join('reviews', 'reports.id', '=', 'reviews.report_id')
            ->select('reports.*', 'reviews.detail')
            ->get();

            // dd($data->all());

        // return view('admin.report.index')->with('reports',Report::all())->with('reviews',Review::all());

        //return view('admin.report.index', $data);

        return view('admin.report.index')->with('reports', $data);
    }


}
