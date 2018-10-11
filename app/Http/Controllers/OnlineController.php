<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class OnlineController extends Controller
{
    public function view_online(Request $request){
        $table_online = 'online';
        $time_curent = time();
        $second = 10;
        $time_in = $time_curent;
        $time_out = $time_curent + $second;
        $session_id = Session::getId();
        $has_sessionId = DB::table($table_online)->where('session_id',$session_id)->count();
        if($has_sessionId == 0){
            DB::table($table_online)->insert(['session_id'=>$session_id,'time_in'=>$time_in,'time_out'=>$time_out,'online'=>1]);
        }
        DB::table($table_online)->where('session_id',$session_id)->update(['time_in'=>$time_in,'time_out'=>$time_out,'online'=>1]);
        DB::table($table_online)->where('time_out','<',$time_curent)->delete();
    }
}
