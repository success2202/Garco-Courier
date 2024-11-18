<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Settings;
use App\Models\Tracking;
use Illuminate\Http\Request;
use App\Models\CourierDetails;
use Illuminate\Support\Facades\Session;

class ShipmentController extends Controller
{
    //

    public function Index(Request $req)
    {
        
        sleep(1);
        $code = Tracking::where('const_no', $req->trackID)->first();
        if($code)
        {
            $code->load('courier', 'trackHistory');
        }
        return view('users.track')
        ->with('settings', Settings::first())
        ->with('blogs', Blog::latest()->get())
        ->with('tracking', $code);
   
        return back();
    
    }


    // public function Tracking()
    // {
    //     return view('users.tracking');
    // }

}
