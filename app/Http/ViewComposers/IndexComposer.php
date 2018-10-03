<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Categories;

class IndexComposer {
    
    /**
     * The system repository implementation.
     *
     * @var NewletterRepository
     */
    //protected $newletter;
    
    /**
     * Create a new profile composer.
     *
     * @param  SystemRepository  $newletter
     * @return void
     */
    public function __construct() {
       
    }
    
    public function compose(View $view) {
        //congigs
        $data = DB::table('configs')->get();
        if($data->count() > 0){
            foreach ($data as $k => $v) {
                $array_value = json_decode($v->value, true);
                $configs_data[$v->key] = $array_value;
            }
        }
        else{
            $configs_data['key'] = 'value';
        }
        $view->with('configs_data', $configs_data);

        //images
        $array_type_image = array();
        $data = DB::table('images')->select('type')->groupBy('type')->get();
        foreach ($data as $key => $value) {
            array_push($array_type_image,$value->type);
        }
        foreach ($array_type_image as $value) {
            $data = DB::table('images')->where('type',$value)->where('status',1)->get();
            $images_data[$value] = $data;
            $view->with('images_data', $images_data);
        }

        //product
        $array_product = DB::table('products')->where('status',1)->get();
        $view->with('product_data', $array_product);

        //menu-cat
        $array_cat = DB::table('categories')->orderBy('order')->get();
        foreach ($array_cat as $key => $value) {
            $get_array_parent = $value->array_parent;
            $get_array_parent = unserialize($get_array_parent);
            unset($get_array_parent[0]);
            array_push($get_array_parent,$value->id);
            $get_array_parent = array_values($get_array_parent);
            $link = '';
            foreach ($get_array_parent as $value_2) {
                $link .= Categories::where('id', $value_2)->first()->slug . '/';
            }
            $url = route('page.posts',['slug'=>$link]);
            $get_cat[$key]['title'] = $value->title;
            $get_cat[$key]['url'] = $url;
        }
        $view->with('get_cat', $get_cat);

        //test
        // $categories = Categories::orderBy('order')->get();
        // echo self::showCategories($categories);
        // die;
    }
    function showCategories($categories, $parent_id = 0, $char = '',$stt = 0)
    {
        $html = '';
        // BƯỚC 2.1: LẤY DANH SÁCH CATE CON
        $cate_child = array();
        foreach ($categories as $key => $item)
        {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent == $parent_id)
            {
                $cate_child[] = $item;
                unset($categories[$key]);
            }
        }
         
        // BƯỚC 2.2: HIỂN THỊ DANH SÁCH CHUYÊN MỤC CON NẾU CÓ
        if ($cate_child)
        {
            if ($stt == 0){
                $class='';
            }
            else if ($stt == 1){
                $class = "";
            }
            else if ($stt == 2){
                $class='wsmenu-submenu';
            }
            if(!isset($class)) $class='';
            $html .= '<ul class="'.$class.'">';
            foreach ($cate_child as $key => $item)
            {
                // Hiển thị tiêu đề chuyên mục
                $html .= '<li><a href="#123">' . $item->title . '</a>';
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                $html .= self::showCategories($categories, $item->id, $char.'|---',++$stt);
                $html .= '</li>';
            }
            $html .= '</ul>';
        }
        return $html;
    }
    
}
