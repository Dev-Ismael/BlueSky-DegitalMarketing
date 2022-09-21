<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pricing;
use App\Http\Requests\UpdatePricingRequest;
use App\Http\Controllers\Controller;

class PricingController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePricingRequest  $request
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePricingRequest $request, Pricing $pricing)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        return response()->json([
            "pricing" => $requestData ,
        ]);
    }

}
