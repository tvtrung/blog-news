<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Images;
use Validator;
use File;
use Image;
use Hash;

class ImagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function default(){
    	return redirect()->route('admin.images.index',['type'=>'slider']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        $list = Images::where('type',$type)->orderBy('order')->paginate(15);
        $title = self::get_title($type);
        return view('admin.page.images.index',['data'=>$list,'title'=>$title,'type'=>$type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {
        $max_order = Images::where('type',$type)->max('order') + 1;
        $title = self::get_title($type);
        return view('admin.page.images.create',['title'=>$title,'type'=>$type,'max_order'=>$max_order]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $type)
    {
        $rule = array(
                'title' => 'bail|required',
            );
        $messages = array( 
                'title.required' => 'Bạn chưa nhập tiêu đề',
                );
        $this->validate($request, $rule, $messages);
        $isActive = $request->get('isActive');
        if($isActive == 'on') $isActive = 1; else $isActive = 0;
        $data = [
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'link' => $request->get('link'),
                'status' => $isActive,
                'type' => $type,
                'order' => $request->get('order'),
                ];
        if($request->hasFile('image')){
            $dir = 'uploads/images/';
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            if (!File::exists($dir)) {
                File::makeDirectory($dir, $mode = 0777, true, true);
            }
            $path = $dir . $filename;
            Image::make($file)->save(($path));
            $data['photo'] = $filename;
        }else{
            $data['photo'] = "default.png";
        }
        Images::create_row($data);
        return redirect()->route('admin.images.index',['type'=>$type])->with('success','Thêm Hình ảnh thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($type, $id)
    {   
        $row = Images::find($id);
        $title = self::get_title($type);
        return view('admin.page.images.edit',['row'=>$row,'title'=>$title,'type'=>$type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $type, $id)
    {
        $row = Images::find($id);
        $isActive = $request->get('isActive');
        if($isActive == 'on') $isActive = 1; else $isActive = 0;
        $data = [
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'link' => $request->get('link'),
                'status' => $isActive,
                'type' => $type,
                'order' => $request->get('order'),
                ];
        if($request->hasFile('image')){
            $dir = 'uploads/images/';
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            if (!File::exists($dir)) {
                File::makeDirectory($dir, $mode = 0777, true, true);
            }
            $path = $dir . $filename;
            File::delete(public_path($dir . $row->photo));
            Image::make($file)->save(($path));
            $data['photo'] = $filename;
        }else{
            $data['photo'] = $row->photo;
        }
        Images::update_row($data, $id);
        return redirect()->route('admin.images.edit',['type'=>$type,'id'=>$id])->with('success','Cập nhật Hình ảnh thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($type, $id)
    {
        $row = Images::find($id);
        $photo = $row->photo;
        $dir = 'uploads/images/';
        if($photo != 'default.png'){
            File::delete(public_path($dir . $photo));
        }
        Images::destroy($id);
        return redirect()->route('admin.images.index',['type'=>$type])->with('success','Xóa Hình ảnh thành công');
    }

    public function update_status_ajax($id){
        $row = Images::find($id);
        if($row->status == 1){
            $status = 0;
        }else{
            $status = 1;
        }
        $row->status = $status;
        $row->save();
    }
    public function view($id){
        $row = Images::find($id);
        return view('admin.page.images.view',['row'=>$row]);
    }
    public function update_order_ajax(Request $request, $id){
        $value = $request->get('value');
        $row = Images::find($id);
        $row->order = $value;
        $row->save();
    }
    public function get_title($type){
        switch ($type) {
            case 'banner_sidebar_1': $title = "Banner 1";break;
            case 'banner_sidebar_2': $title = "Banner 2";break;
            case 'bocongthuong': $title = "Bộ công thương";break;
        }
        return $title;
    }
}
