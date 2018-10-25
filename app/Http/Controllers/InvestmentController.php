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

    public function showInvestmentSinglePage($id) {
        $investmentDetails = Investment::find($id);
        return view('investment-single', compact('investmentDetails'));
    }

    public function showInvestmentListing() {
        $investmentDetails = Investment::paginate(6);
        return view('investment-listing', compact('investmentDetails'));
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
            'image_name' => $image[2],
            'thumbnail_image' => $image[1],
            'single_image' => $image[0],
        ]);

        return redirect('mdmdmdd')->with('success', 'Investment successfully added to investments listing');
        //return back()->with('success', 'Event deleted successfully');
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
