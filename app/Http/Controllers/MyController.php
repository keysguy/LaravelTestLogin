<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function show(Request $request, $param)
    {
        if ($param == "info") {
            return "test for controller : {$param} -- {$request}";
        } else {
            return redirect()->away("https://www.bilibili.com");
        }
    }
}
