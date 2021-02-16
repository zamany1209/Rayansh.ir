<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $data_rayansh = DB::table('data_rayansh')->get();
        $test_user = true;
        return view('home',['data_rayansh'=>$data_rayansh,'test_user'=>$test_user]);
    }
}
