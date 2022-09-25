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

        

        try{
            $ip = $request->ip();
            $visitorCountry = Location::get($ip)->countryCode;
        } catch (\Exception $e) {
            $visitorCountry = "US";
        }
        // dd($visitorCountry);


        return view('home' , compact('visitorCountry'));
    }


}
