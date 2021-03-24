<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MyController extends Controller
{
    public function show(Request $request, $param)
    {
        //Log::alert("MyController::show", $param);
        if ($param == "info") {
            $ret = User::findOrFail(1);
            return "test for controller : {$param} -- {$request}";
        } else {
            return redirect()->away("https://www.bilibili.com");
        }

        $table = DB::table('Users');
        $table->get();
    }
}
