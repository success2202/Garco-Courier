<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function Index()
    {
        return view('admin.index')
        ->with('breadcrumb', 'Admin');
    }
    
}
