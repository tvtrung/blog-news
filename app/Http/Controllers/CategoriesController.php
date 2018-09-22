<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

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
    public function ajax_switch($id){
    	Categories::update_status($id);
    }
    public function ajax_view($id){
    	$data = Categories::detail($id);
        return view('admin.page.product.view',['row' => $data]);
    }
    public function ajax_order(Request $request, $id){
    	$order = $request->get('order');
        Categories::update_order($id, $order);
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
	            $html .= '<td><input type="number" min="0" style="width: 50px;"></td>';
	            $html .= '<td>' . $char . $item->title . '</td>';
	            $html .= '<td class="text-center"><input type="checkbox" name="" class="ajax-switch" data-link="' . route('admin.cats.ajax_switch',['id'=>$item->id]) . '"' . $isCheck . '></td>';
	            $html .= '<td class="text-center">';
	            $html .= '<a href="#"><span class="label label-sm label-success"><i class="fa fa-eye"></i></span></a>&nbsp;';
	            $html .= '<a href="#"><span class="label label-sm label-warning"><i class="fa fa-edit"></i></span></a>&nbsp;';
	            $html .= '<a href="#"><span class="label label-sm label-danger"><i class="fa fa-trash"></i></span></a>';
	            $html .= '</td>';
	            $html .= '</tr>';
	            unset($categories[$key]);
	            $html .= Self::showCategories($categories, $item->id, $char.'|---');
	        }
	    }
	    return $html;
	}
}
