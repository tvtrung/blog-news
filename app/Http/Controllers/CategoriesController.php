<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriesRequest;
use Illuminate\Support\Facades\DB;
use App\Categories;
use App\Posts;

class CategoriesController extends Controller
{
   	public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
    	$data = Categories::all();
    	$html = Self::showCategories($data);
    	return view('admin.page.categories.index',['html'=>$html]);
    }
    public function create(){
    	$data = Categories::all();
    	$max_order = Categories::max('order');
    	$html = Self::showCategories_option($data);
    	return view('admin.page.categories.create',['html'=>$html,'max_order'=>$max_order]);
    }
    public function store(CategoriesRequest $request){
    	if($request->get('status') == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }
        $input = [
            'parent' => $request->get('parent'),
            'title' => $request->get('title'),
            'slug' => $request->get('slug'),
            'order' => $request->get('order'),
            'status' => $status,
        ];
        Categories::create_data($input);
        return redirect()->route('admin.cats.index')->with('success','Đã thêm dữ liệu thành công');
    }
    public function edit($id){
    	$row = Categories::findOrFail($id);
    	$data = Categories::all();
    	$html = Self::showCategories_option($data);
    	return view('admin.page.categories.edit',['row'=>$row,'html'=>$html]);
    }
    public function update(CategoriesRequest $request, $id){
    	$row = Categories::findOrFail($id);
    	if($request->get('status') == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }
        $input = [
            'parent' => $request->get('parent'),
            'title' => $request->get('title'),
            'slug' => $request->get('slug'),
            'order' => $request->get('order'),
            'status' => $status,
        ];
        Categories::update_data($input, $id);
        return redirect()->route('admin.cats.edit',['id'=>$id])->with('success','Chỉnh sửa dữ liệu thành công');
    }
    public function ajax_switch($id){
    	Categories::update_status($id);
    }
    public function ajax_order(Request $request, $id){
    	$order = $request->get('order');
        Categories::update_order($id, $order);
    }
    public function ajax_view($id){
    	$row = Categories::detail($id);
        return view('admin.page.categories.view',['row' => $row]);
    }
    public function delete($id){
        $row = Categories::findOrFail($id);
        $count_sub = Categories::where('parent',$id)->count();
        $count_posts = Posts::where('cat_id',$id)->count();
        if($count_sub == 0){
            if($count_posts == 0){
                if($row->delete())
                    return redirect()->route('admin.cats.index')->with('success','Xóa dữ liệu thành công');
                else
                    return redirect()->route('admin.cats.index')->with('fail','Lỗi xóa dữ liệu');
            }
            else
                return redirect()->route('admin.cats.index')->with('fail','Không thể xóa vì có bài viết trong danh mục này. Có ' . $count_posts . ' bài viết');
        }
        else{
            return redirect()->route('admin.cats.index')->with('fail','Không thể xóa khi còn danh mục con');
        }
    }
    public function showCategories($categories, $parent_id = 0, $char = ''){
    	$html = "";
	    foreach ($categories as $key => $item)
	    {
	    	$isCheck = "";
	    	if($item->status == 1) $isCheck = "checked=\"checked\""; else $isCheck = "";
	        if ($item->parent == $parent_id)
	        {
	            $html .= '<tr>';
	            $html .= '<td><input type="number" name="order" class="ajax-order" value="' . $item->order . '" min="0" data-link="' . route('admin.cats.ajax_order',['id'=>$item->id]) . '" style="width: 50px;"></td>';
	            $html .= '<td>' . $char . $item->title . '</td>';
	            $html .= '<td class="text-center"><input type="checkbox" name="" class="ajax-switch" data-link="' . route('admin.cats.ajax_switch',['id'=>$item->id]) . '"' . $isCheck . '></td>';
	            $html .= '<td class="text-center">';
	            $html .= '<a href="#" class="click-to-view" data-link="' .  route('admin.cats.ajax_view',['id'=>$item->id]) . '"><span class="label label-sm label-success"><i class="fa fa-eye"></i></span></a>&nbsp;';
	            $html .= '<a href="' . route('admin.cats.edit',['id'=>$item->id]) . '"><span class="label label-sm label-warning"><i class="fa fa-edit"></i></span></a>&nbsp;';
	            $html .= '<a href="#" class="click-to-delete" data-link="' .  route('admin.cats.delete',['id'=>$item->id]) . '"><span class="label label-sm label-danger"><i class="fa fa-trash"></i></span></a>';
	            $html .= '</td>';
	            $html .= '</tr>';
	            unset($categories[$key]);
	            $html .= Self::showCategories($categories, $item->id, $char.'|---');
	        }
	    }
	    return $html;
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
