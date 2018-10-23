<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index() {
        $properties = Property::paginate(3);
        return view('baselayout', compact('properties'));
    }
    
}
