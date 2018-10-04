<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostsRequest;
use Illuminate\Support\Facades\DB;
use File;
use Image;
use App\Posts;
use App\Categories;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
    	$data_cats = Categories::all();
        foreach ($data_cats as $value) {
            $title_cat[$value->id] = $value->title;
        }
    	$html_option = Self::showCategories_option($data_cats);
    	if(isset($_GET['cat']) && $_GET['cat'] != 0 && $_GET['cat'] != null){
    		$get_cat_id = $_GET['cat'];
    		$data = Posts::where('cat_id',$get_cat_id)->orderBy('id','desc')->paginate(20);
    	}else{
    		$data = Posts::orderBy('id','desc')->paginate(20);
    	}
        
    	return view('admin.page.posts.index',['data'=>$data,'html_option'=>$html_option,'title_cat'=>$title_cat]);
    }
    public function edit($id){
    	$row = Posts::findOrFail($id);
    	$data_cats = Categories::all();
    	$html_option = Self::showCategories_option($data_cats);
    	return view('admin.page.posts.edit',['row'=>$row,'html_option'=>$html_option]);
    }
    public function update(PostsRequest $request, $id){
    	if($request->get('status') == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }
        $current_photo_name = $request->get('photo_name');
        $dir = 'uploads/posts/';
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $filename = time() . str_random(5) . '.' . $file->getClientOriginalExtension();
            if (!File::exists($dir)) {
                File::makeDirectory($dir, $mode = 0777, true, true);
            }
            $path = $dir . $filename;
            Image::make($file)->save(($path));
    		File::delete(public_path($dir . $current_photo_name));
    		$input_img = ['photo' => $filename];
        }
        else{
        	$input_img = ['photo' => $current_photo_name];
        }
        $input_data = [
            'title' => $request->get('title'),
            'slug' => $request->get('slug'),
            'list-cats-id' => $request->get('list-cats-id'),
            'description' => $request->get('text-description'),
            'content' => $request->get('text-content'),
            'seo_keyword' => $request->get('seo_keyword'),
            'seo_description' => $request->get('seo_description'),
            'seo_content' => $request->get('seo_content'),
            'status' => $status,
        ];
        $input = array_merge($input_img, $input_data);
        Posts::update_data($input, $id);
        return redirect()->route('admin.posts.edit',['id'=>$id])->with('success','Chỉnh sửa dữ liệu thành công');
    }
    public function create(){
    	$data_cats = Categories::all();
    	$html_option = Self::showCategories_option($data_cats);
    	return view('admin.page.posts.create',['html_option'=>$html_option]);
    }
    public function store(PostsRequest $request){
    	if($request->get('status') == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }
        $current_photo_name = '';
        $dir = 'uploads/posts/';
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $filename = time() . str_random(5) . '.' . $file->getClientOriginalExtension();
            if (!File::exists($dir)) {
                File::makeDirectory($dir, $mode = 0777, true, true);
            }
            $path = $dir . $filename;
            Image::make($file)->save(($path));
    		File::delete(public_path($dir . $current_photo_name));
    		$input_img = ['photo' => $filename];
        }
        else{
        	$input_img = ['photo' => $current_photo_name];
        }
        $input_data = [
            'title' => $request->get('title'),
            'slug' => $request->get('slug'),
            'list-cats-id' => $request->get('list-cats-id'),
            'description' => $request->get('text-description'),
            'content' => $request->get('text-content'),
            'view' => 0,
            'seo_keyword' => $request->get('seo_keyword'),
            'seo_description' => $request->get('seo_description'),
            'seo_content' => $request->get('seo_content'),
            'status' => $status,
        ];
        $input = array_merge($input_img, $input_data);
        Posts::store_data($input);
        return redirect()->route('admin.posts.index')->with('success','Thêm dữ liệu thành công');
    }
    public function delete($id){
        $row = Posts::findOrFail($id);
        if($row->delete()){
            return redirect()->route('admin.posts.index')->with('success','Xóa dữ liệu thành công');
        }else{
            return redirect()->route('admin.posts.index')->with('fail','Lỗi xóa dữ liệu');
        }
    }
    public function ajax_view($id){
        $data_cats = Categories::all();
        foreach ($data_cats as $value) {
            $title_cat[$value->id] = $value->title;
        }
    	$row = Posts::detail($id);
        return view('admin.page.posts.view',['row' => $row,'title_cat'=>$title_cat]);
    }
    public function ajax_switch($id){
    	Posts::update_status($id);
    }
    public function showCategories_option($categories, $parent_id = 0, $char = ''){
		$html = "";
	    foreach ($categories as $key => $item)
	    {
	        if ($item->parent == $parent_id)
	        {
	        	$html .= '<option value="' . $item->id . '" data-parent="' . $item->parent . '">' . $char . $item->title . '</option>';
	            unset($categories[$key]);
	            $html .= Self::showCategories_option($categories, $item->id, $char.'|---');
	        }
	    }
	    return $html;
	}
}
