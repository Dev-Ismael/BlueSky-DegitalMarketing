<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('layouts.admin');


    }
    public function getAuthInfo()
    {


        // $user_id = Auth::id();
        $user = User::where("id", 1 )->get();
        return response()->json([
            "user" => $user,
        ]);

    }
}
