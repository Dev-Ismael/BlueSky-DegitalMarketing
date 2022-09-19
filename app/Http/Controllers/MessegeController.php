<?php

namespace App\Http\Controllers;

use App\Models\Messege;
use App\Http\Requests\StoreMessegeRequest;
use Illuminate\Http\Request;

class MessegeController extends Controller
{



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMessegeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessegeRequest $request)
    {
        $requestData = $request->all();

        // return response()->json([
        //     "requestData" => $request->all()
        // ]);


        try {

            // store row in table
            $messege = Messege::create( $requestData );

            // if not save in DB
            if(!$messege){
                return response()->json([
                    'status' => 'error',
                    'msg'    => 'Error at store opration'
                ]);
            }

            // If Found Success
            return response()->json([
                'status' => 'success',
                "msg"    => "messege store successfully",
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'msg'    => 'server error'
            ]);
        }
    }

}
