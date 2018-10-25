<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class ImageUploadController extends Controller
{
    public function uploadImages(Request $request, $image_path, $folder)
    {   
        $this->validate($request,[
            'image_name'=>'required|between:1, 6000',
        ]);

        $image = $request->file('image_name');

        $name = $request->file('image_name')->getClientOriginalName();
       
        $image_name = $request->file('image_name')->getRealPath();

        $path = "firststone/".$folder;
        $uniqueid = Date('Ymdhis').rand(1,99999);
        $thumbnailImageSize = array("width" => 166, "height" => 106, "crop"=>"scale");
        $singleImageSize = array("width" => 870, "height" => 570, "crop"=>"scale");
      
        $imagename_no_ext = explode('.',$name);
        Cloudder::upload($image_name, $path.$uniqueid.$request->file('image_name')->getClientOriginalName(), array( "eager" => array($singleImageSize, $thumbnailImageSize )));
        $CloudderArray = Cloudder::getResult();

        $allImages = [];
        $singleImage = $CloudderArray['eager'][0]['url']; //singlepage image
        $thumbnailImage = $CloudderArray['eager'][1]['url'];
        $image_url = $CloudderArray['url'];
        $allImages = [ $singleImage, $thumbnailImage, $image_url];

        return $allImages;

       
        if($_SERVER['REMOTE_ADDR'] == '127.0.0.1'):
            //save to uploads directory
            $image->move(public_path("uploads"), $name);
        endif;

        return $CloudderArray;

    }
}
