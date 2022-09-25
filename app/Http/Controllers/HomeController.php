<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use App\Traits\SEOTrait;
use App\Models\SeoManagement;
class HomeController extends Controller
{
    use SEOTrait;

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

        $pageSEO = SeoManagement::where('id', 1 )->first();

        // SEO Trait
        $this->seo($pageSEO->home);

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
