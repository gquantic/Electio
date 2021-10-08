<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    private $api = 0;
    private $password = 0;

    public function request($request, $method)
    {
        echo "$request / $method";
    }
}
