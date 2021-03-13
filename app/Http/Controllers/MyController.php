<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MyController extends Controller
{
    public function show(Request $request, $param)
    {
        Log::alert("MyController::show", $param);
        if ($param == "info") {
            return "test for controller : {$param} -- {$request}";
        } else {
            return redirect()->away("https://www.bilibili.com");
        }
    }
}
