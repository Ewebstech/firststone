<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use App\Project;

class FormController extends Controller
{
    public function index()
    {

        var_dump('posted');
        die;

       //return view('admin/index');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $data = $input['project'];
        $project = new Project;
		$project->dealsize = $data['dealsize'];
		$project->dealunit = $data['dealunit'];
        $project->amount = $data['amount'];
        $project->yieldtarget = $data['yieldtarget'];
        $project->address = $data['address'];
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
