<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
   
    public function index()
    {
        $Investor = InvestorResource::collection(Investor::get());
        return $this->apiResponse($Investor, 'ok', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Investor $investor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Investor $investor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Investor $investor)
    {
        //
    }
}
