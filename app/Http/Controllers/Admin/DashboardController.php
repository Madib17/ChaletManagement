<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Chalet;
use App\Models\Accommodation;
use App\Models\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard')->with('user',User::count())->with('chalet',Chalet::count())->with('accommodation',Accommodation::count())->with('report',Report::count());
    }
}
