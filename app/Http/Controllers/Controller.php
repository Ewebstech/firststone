<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function hashdata($data) {
        $p_data = md5($data);
        $sbr = substr("$p_data", 0, 2);
        $c_data = CRYPT("$p_data", "$sbr");
        $c_data = substr("$c_data", 2);
        return $c_data;
    }
}
