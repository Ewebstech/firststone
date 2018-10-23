<?php

namespace App\Http\Controllers;

use App\Investment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InvestmentController extends Controller
{
    public function create() {
        return view('admin/addinvestments');
    }

    public function store(Request $request) {
        
        $this->validateRequest($request);

        $image_path = date('ymhis').rand(0, 99999);
        $image = $uploadimage->uploadImages($request, $image_path);

        Investment::create([
            'investmenttype'=> $request->investmenttype,
            'dealsize' => $request->dealsize,
            'dealunits' => $request->dealunits,
            'amount' => $request->amount,
            'minreturns' => $request->minreturns,
            'address' => $request->address,
            'image_name' => $image['url']
        ]);

        return back('success', 'Investment successfully added to investments listing');
    }

    public function validateRequest($request) {
        return Validator::make($request->all(), [
            'investmenttype'=> 'required',
            'dealsize' => 'required',
            'dealunits' => 'required',
            'amount' => 'required|numeric',
            'minreturns' => 'required|numeric',
            'address' => 'required',
            'image_name' => 'required|mimes:jpeg,jpg,png',
        ])->validate();
    }  
}
