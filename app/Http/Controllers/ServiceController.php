<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $services = Service::get();
        return response()->json([
            'status' => 'success',
            'msg'    => 'services get successfully',
            'data'   => $services
        ]);
    }

    public function show()
    {
        return view('service');
    }

    public function getService($slug)
    {
        try{
            // Find Record In Db Column
            $service = Service::where('slug', $slug )->first();

            if( !$service ){  // If Not Found
                return response()->json([
                    'status' => 'error',
                    'msg'    => '404 not found'
                ]);
            }

            return response()->json([ // If Found Success
                'status' => 'success',
                "msg"    => "service get successfully",
                'data'   => $service
            ]);
        } catch (\Exception $e) {
            return response([
                'status' => 'error',
                'msg'    => 'server error'
            ]);
        }
    }
}
