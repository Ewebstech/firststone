<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ImageUploadController;

class PropertyController extends Controller
{
    public function create() {
        return view('admin/addproperty');
    }

    public function showPropertySinglePage($id) {
        $propertyDetails = Property::find($id);
        $otherProperties = Property::where('id', '!=', $id)->limit(3)->get();
        return view('property-single', compact('propertyDetails', 'otherProperties'));
    }

    public function showPropertyListing() {
        $propertyDetails = Property::paginate(6);
        return view('property-listing', compact('propertyDetails'));
    }

    
    public function store(Request $request, ImageUploadController $uploadimage) {
       
        $this->validateRequest($request);
        
        $image_path = date('ymhis').rand(0, 99999);
        $image = $uploadimage->uploadImages($request, $image_path, "properties");
     
        Property::create([
            'investmenttype'=> $request->investmenttype,
            'title' => $request->title,
            'address' => $request->address,
            'amount' => $request->amount,
            'type' => $request->type,
            'description' => $request->description,
            'image_name' => $image[2],
            'thumbnail_image' => $image[1],
            'single_image' => $image[0],
        ]);

        return back()->with('success', 'Property successfully added to properties listing');
    }


    public function validateRequest($request) {
        return Validator::make($request->all(), [
            'investmenttype'=> 'required',
            'title' => 'required',
            'address' => 'required',
            'amount' => 'required|numeric',
            'type' => 'required',
            'description' => 'required',
            'image_name' => 'required|mimes:jpeg,jpg,png',
        ])->validate();
    }
    
}
