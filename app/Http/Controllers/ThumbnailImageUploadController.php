<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class ThumbnailImageUploadController extends Controller
{
    public function uploadImages(Request $request, $image_path, $folder, $width, $height)
    {   
        $this->validate($request,[
            'image_name'=>'required|between:1, 6000',
        ]);

        $image = $request->file('image_name');

        $name = $request->file('image_name')->getClientOriginalName();
       
        $image_name = $request->file('image_name')->getRealPath();

        $path = "firststone/".$folder;
        $uniqueid = Date('Ymdhis').rand(1,99999);
      
        $imagename_no_ext = explode('.',$name);
        Cloudder::upload($image_name, $path.$uniqueid.$request->file('image_name')->getClientOriginalName(), array("width" => $width, "height" => $height, "crop"=>"scale"));
        $CloudderArray = Cloudder::getResult();
        $image_url = $CloudderArray['url'];
       
        if($_SERVER['REMOTE_ADDR'] == '127.0.0.1'):
            //save to uploads directory
            $image->move(public_path("uploads"), $name);
        endif;

        return $CloudderArray;

    }
}
