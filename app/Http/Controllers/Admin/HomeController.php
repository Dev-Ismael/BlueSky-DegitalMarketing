<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return response()->json([
        //     'messege' => "Connected",
        // ]);

        $user = User::where("id", 1 )->get();
        return response()->json([
            "user" => $user,
        ]);


    }
}
