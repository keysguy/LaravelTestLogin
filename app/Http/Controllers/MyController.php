<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function show($param)
    {
        return "test for controller : {$param}";
    }
}
