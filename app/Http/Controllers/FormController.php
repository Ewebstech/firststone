<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use App\Project;
use JD\Cloudder\Facades\Cloudder;
use App\Http\Controllers\ImageUploadController;

class FormController extends Controller
{
    protected $uploadImage;

    public function __construct(){
        $this->uploadImage = new ImageUploadController;
    }
    
    public function index()
    {
       //return view('admin/index');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $data = $input['project'];
        $project = new Project;
        $image_path = "firststone/".$data['dealsize'];
        $imageJson = $this->uploadImage->uploadImages($request, $image_path);
        $data['imageurl'] = $imageJson['url'];
		$project->content = json_encode($data);
        $project->status = '';
        $project->type = $data['type'];
        
		if($project->save()){
            
            $output['success'] = "<center style='font-size: 13px;'><div class='col-md-6 alert alert-success text-center'>Data Upload Successful</div></center>";
            return $output['success'];
        } else {
            $output['failure'] = "<center style='font-size: 13px;'><div class='col-md-6 alert alert-danger text-center'>Error Uploading Data!!</div></center>";
            return $output['failure'];
        }

       
    }

   
}
