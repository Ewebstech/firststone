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

    public function store(Request $request, ImageUploadController $uploadimage) {
       
        $this->validateRequest($request);
        
        $image_path = date('ymhis').rand(0, 99999);
        $image = $uploadimage->uploadImages($request, $image_path);
     
        Property::create([
            'investmenttype'=> $request->investmenttype,
            'title' => $request->title,
            'address' => $request->address,
            'amount' => $request->amount,
            'type' => $request->type,
            'description' => $request->description,
            'image_name' => $image['url']
        ]);

        return back('success', 'Property successfully added to properties listing');
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
