<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function getDashboard(){
        return view('backend.index');
    }
    public function getLogout(){
        return redirect()->intended('login');
    }
}
