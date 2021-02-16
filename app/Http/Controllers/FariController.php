<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FariController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,$url)
    {
        //
        $data_rayansh = DB::table('data_rayansh')->find($url);
        $name_filme_post = $data_rayansh->save_move;
        $filme_a = DB::table($name_filme_post)->get();
        $name_coment_post = $data_rayansh->cament;
        $name_coment_a = DB::table($name_coment_post)->get();
        $id_teacher = $data_rayansh->id_teacher;
        $name_teacher = DB::table('teacher')->find($id_teacher);
        $test_user = true;
        return view('fari',['data_rayansh'=>$data_rayansh,'test_user'=>$test_user,'filme_a'=>$filme_a,'name_coment_a'=>$name_coment_a,'name_teacher'=>$name_teacher]);
    }
}
