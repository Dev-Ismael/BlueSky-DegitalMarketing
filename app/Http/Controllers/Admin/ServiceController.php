<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\Services\StoreServiceRequest;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id','desc')->paginate(10);
        return response()->json($services);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {

        // save all request in one variable
        $requestData = $request->all();

        // Create img name
        $img_extention = $request -> img -> getClientOriginalExtension();
        $img_name = rand(1000000,10000000) . "." . $img_extention;   // name => 32632.png

        // Create icon name
        $icon_extention = $request -> icon -> getClientOriginalExtension();
        $icon_name = rand(1000000,10000000) . "." . $icon_extention;   // name => 3623628.png

        // Path
        $path = "images/services" ;

        // Upload
        $request -> img -> move( $path , $img_name );
        $request -> icon  -> move( $path , $icon_name );


        // Add images names in request array
        $requestData['img']  = $img_name;
        $requestData['icon'] = $icon_name;


        // add slug in $requestData Array
        $requestData += [ 'slug' => Str::slug( $request->title , '-') ];

        // return response()->json([
        //     "requestData" => $requestData,
        // ]);

        // Store in DB
        try {
            
            // store row in table
            $service = Service::create( $requestData );

            // if not save in DB
            if(!$service){
                return response()->json([
                    'status' => 'error',
                    'msg'    => 'Error at store opration'
                ]);
            }

            // If Found Success
            return response()->json([
                'status' => 'success',
                "msg"    => "Service store successfully",
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'msg'    => 'server error'
            ]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            // Find Record In Db Column
            $service = Service::where('id', $id )->first();

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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
