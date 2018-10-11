<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Users;
use Validator;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_view = self::count_online();
        $online_view = DB::table('online')->count();
        $today_view = DB::table('statistics')->where('date',date('Y-m-d'))->first()->view;
        $sum_view = DB::table('statistics')->sum('view');

        $count_admin = DB::table('users')->where('level',1)->count();
        $count_editor = DB::table('users')->where('level',2)->count();
        return view('admin.page.dashboard.index',[
                                            'count_admin'=>$count_admin,
                                            'count_editor'=>$count_editor,
                                            'total_view'=>$total_view,
                                            'online_view'=>$online_view,
                                            'today_view'=>$today_view,
                                            'sum_view'=>$sum_view
                                        ]);
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('admin.home');
    }
    public function upload_editor(){
        return view('upload-editor.index');
    }
    public function count_online(){
        $table_online = 'online';
        $table_statistics = 'statistics';
        $count_online = DB::table($table_online)->count();
        $today_date = date('Y-m-d');
        $yesterday_date = date('Y-m-d',strtotime("-1 days"));
        $data_statistics = DB::table($table_statistics)->get();
        foreach ($data_statistics as $value) {
            $stat[intval(date('Y', strtotime($value->date)))][intval(date('m', strtotime($value->date)))][] = $value->view;
        }
        foreach ($stat as $key => $value) {
            $year_from_to[] = $key;
            
        }
        $min_year = min($year_from_to);
        $max_year = max($year_from_to);
        for ($i = $max_year; $i >= $min_year; $i--) { 
            for ($j = 12; $j >= 1; $j--) { 
                if(isset($stat[$i][$j])){
                    $total_view[$i][$j] = array_sum($stat[$i][$j]);
                }
                else{
                    $total_view[$i][$j] = 0;
                }
            }
        }
        return $total_view;
    }
}
