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
        $count_admin = DB::table('users')->where('level',1)->count();
        $count_editor = DB::table('users')->where('level',2)->count();
        return view('admin.page.dashboard.index',['count_admin'=>$count_admin,'count_editor'=>$count_editor]);
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('admin.home');
    }
    public function upload_editor(){
        return view('upload-editor.index');
    }
}
