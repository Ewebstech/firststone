<?php

namespace App\Http\Controllers;

use App\Property;
use App\Investment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index() {
        $noOfInvestments = Investment::count();
        $noOfPropeerties = Property::count();
        //paginate all  that are for sale
        $properties = Property::paginate(3);
        //paginate all that are for sale
        $investments = Investment::paginate(3);
        
        return view('baselayout', compact('properties', 'investments', 'noOfInvestments', 'noOfPropeerties'));
    }
    
}
