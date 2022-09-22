<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $ip = $request->ip();
        $visitorCountry = Location::get('89.238.178.198')->countryCode;
        if(!$visitorCountry){
            $visitorCountry == "EG";
        }
        // dd($visitorCountry);
        return view('home' , compact('visitorCountry'));
    }


}
