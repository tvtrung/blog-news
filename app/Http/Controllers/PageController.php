<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\FaqRequest;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Newletter;
use App\Faq;
use App\Posts;
use App\Categories;
use Session;

class PageController extends Controller
{
    public function __construct(Request $request){

    }
    public function home(){
        $data_post_count = Posts::count();
        $data_cat_count = Categories::count();
        //get_news_latest
        // if($data_post_count > 0){
        //     $url_post = self::url_post();
        //     $data_news_latest_1 = Posts::get_news_latest(0,2);
        //     foreach ($data_news_latest_1 as $key => $value) {
        //         $post_item_latest_1[$key]['title'] = $value->title;
        //         $post_item_latest_1[$key]['title_limit'] = limit_words($value->title, 8);
        //         $post_item_latest_1[$key]['photo'] = url('uploads/posts') . '/' . $value->photo;
        //         $post_item_latest_1[$key]['url'] = $url_post[$value->id];
        //         $post_item_latest_1[$key]['created_at'] = $value->created_at;
        //         $post_item_latest_1[$key]['view'] = $value->view;
        //     }
        // }
        // else{
        //     $post_item_latest_1 = null;
        // }
        // if($data_post_count > 2){
        //     $url_post = self::url_post();
        //     $data_news_latest_2 = Posts::get_news_latest(2,3);
        //     foreach ($data_news_latest_2 as $key => $value) {
        //         $post_item_latest_2[$key]['title'] = $value->title;
        //         $post_item_latest_2[$key]['title_limit'] = limit_words($value->title, 8);
        //         $post_item_latest_2[$key]['photo'] = url('uploads/posts') . '/' . $value->photo;
        //         $post_item_latest_2[$key]['url'] = $url_post[$value->id];
        //         $post_item_latest_2[$key]['created_at'] = $value->created_at;
        //         $post_item_latest_2[$key]['view'] = $value->view;
        //     }
        // }
        // else{
        //     $post_item_latest_2 = null;
        // }
        //get_cat_home
        if($data_cat_count > 0 && $data_post_count > 0){
            $url_post = self::url_post();
            $row_cat = null;
            $list_post = null;
            for($i = 1; $i <= 5; $i++){
                $row_cat[$i] = Categories::where('position', $i)->where('status',1)->first();
                if($row_cat[$i] != null){
                    $position = $i;
                    switch ($position) {
                        case 1:
                            $limit = 3;
                            break;
                        case 2:
                            $limit = 3;
                            break;
                        case 3:
                            $limit = 2;
                            break;
                        case 4:
                            $limit = 5;
                            break;
                        case 5:
                            $limit = 10;
                            break;
                    }
                    $list_post[$i] = Posts::get_post_cat_home($row_cat[$i]->id, $limit);                    
                }
            }
        }
        else{
            $row_cat = null;
        }
    	return view('page.main.main',[
                                    // 'post_item_latest_1'=>$post_item_latest_1,
                                    // 'post_item_latest_2'=>$post_item_latest_2,
                                    'row_cat'=>$row_cat,
                                    'list_post'=>$list_post,
                                    'url_post'=>$url_post
                                ]);
    }
    public function introduce(){
    	return view('page.main.gioithieu');
    }
    public function price(){
    	return view('page.main.banggia');
    }
    public function guide(){
    	return view('page.main.huongdan');
    }
    public function faq(){
        $data = Faq::orderBy('order')->get();
    	return view('page.main.hoidap',['data'=>$data]);
    }
    public function contact(){
    	return view('page.main.lienhe');
    }
    public function noscript(){
    	return view('page.main.main');
    }
    public function contact_form_footer_ajax(Request $request){
        $rules = array(
            'email' => 'bail|required|email',
            'content' => 'bail|required'
        );
        $messages = array( 
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'Email không đúng định dạng',
                'email.unique' => 'Email này đã được gửi',
                'content.required' => 'Bạn chưa nhập nội dung' 
                );
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            foreach ($validator->messages()->getMessages() as $field_name => $messages){
                foreach ($messages as $messages) {
                    echo $messages . "<br>";
                }
            }
        }
        else{
            if(($request->cookie("send_newletter")) == null){
                $input = [
                    'email' => $request->get('email'),
                    'content' => $request->get('content')
                ];
                $result = Newletter::postNewletter($input);
                echo "<div style='color:#0095da;'>Cám ơn bạn đã gửi liên hệ</div>";
                $response = new Response();
                $response->withCookie("send_newletter","1", 1);
                return $response;
            }else{
                echo "Xin vui lòng đợi 1 phút trước khi gửi liên hệ tiếp theo";
            }
        }
    }
    public function postquestion(FaqRequest $request){
        $data = DB::table('page_faq')->max('order');
        $max_order = $data;
        $max_new = $max_order + 1;
        $input = [
            'order' => $max_new,
            'fullname' => $request->get('fullname'),
            'email' => $request->get('email'),
            'website' => $request->get('website'),
            'question' => $request->get('question'),
            'answer' => '',
            'status' => 0,
        ];
        Faq::create($input);
        return redirect()->route('page.faq')->with('success','Cảm ơn bạn đã đặt câu hỏi, chúng tôi sẽ trả lời bạn trong thời gian sớm nhất.');
    }
    public function posts(Request $request, $slug){
        $url_post = self::url_post();
        $array_slug = explode('/',$slug);
        $end_slug = end($array_slug);
        $row_post = Posts::where('slug',$end_slug)->where('status',1)->first();
        $result = true;
        if($row_post != null){
            //set cookie
            $value_cookie = "post-" . $end_slug;
            if(!isset($_COOKIE[$value_cookie])) {
                Posts::view_plus($end_slug);
                setcookie($value_cookie, 1, time() + (180), "/");
            }
            $row_post = Posts::where('slug',$end_slug)->where('status',1)->first();
            $cat_id = $row_post->cat_id;
            $row_cat = Categories::where('id',$cat_id)->firstOrFail();
            $array_parent = unserialize($row_cat->array_parent);
            unset($array_parent[0]);
            array_push($array_parent,$cat_id);
            $array_parent = array_values($array_parent);
            foreach ($array_parent as $key => $value) {
                $cat_slug = Categories::where('id',$value)->first();
                if($array_slug[$key] != $cat_slug->slug){
                    $result = false;
                    break;
                }
            }
            $c_array_slug = count($array_slug) - 1;
            $c_array_parent = count($array_parent);
            if($c_array_slug != $c_array_parent){
                $result = false;
            }
            if($result == true){
                //Get Relative Post
                $row_relative_post = Posts::where('cat_id',$cat_id)->where('status',1)->where('slug','<>', $end_slug)->orderBy('id','desc')->limit(10)->get();
                if($row_relative_post->count() == 0) $row_relative_post = null;
                //Hiển thì view bài viết
                $post_item['title'] = $row_post->title;
                $post_item['description'] = $row_post->description;
                $post_item['content'] = $row_post->content;
                $post_item['view'] = $row_post->view;
                $post_item['photo'] = $row_post->photo;
                $post_item['photo_resize'] = $row_post->photo_resize;
                $post_item['seo_keyword'] = $row_post->seo_keyword;
                $post_item['seo_description'] = $row_post->seo_description;
                $post_item['seo_content'] = $row_post->seo_content;
                $post_item['created_at'] = $row_post->created_at;
                return view('page.main.detail-post',['post_item'=>$post_item,'row_relative_post'=>$row_relative_post,'url_post'=>$url_post]);
            }
            else{
                abort(404);
            }
        }
        else{
            $row_cat = Categories::where('slug',$end_slug)->first();
            if($row_cat == null){
                abort(404);
            }
            $title_cat = $row_cat->title;
            $id_row_cat = $row_cat->id;
            $array_parent_1 = unserialize($row_cat->array_parent);
            unset($array_parent_1[0]);
            //So sánh link
            $array_compare = $array_parent_1;
            array_push($array_compare,$id_row_cat);
            $array_compare = array_values($array_compare);
            foreach ($array_compare as $key => $value) {
                $cat_slug = Categories::where('id',$value)->first();
                if($array_slug[$key] != $cat_slug->slug){
                    $result = false;
                    break;
                    abort(404);
                }
            }
            //Lấy hết id con để hiển thị bài viết.
            $id_cat_of_post = self::get_sub_cat($id_row_cat);
            if($result == true){
                //Hiển thị bài viết theo cat
                $data_post = Posts::whereIn('cat_id',$id_cat_of_post)->orderBy('id','desc')->where('status',1)->paginate(10);
                if($data_post->count() > 0){
                    foreach ($data_post as $key => $value) {
                        $post_item[$key]['title'] = $value->title;
                        $post_item[$key]['description'] = $value->description;
                        $post_item[$key]['content'] = $value->content;
                        $post_item[$key]['photo'] = $value->photo;
                        $post_item[$key]['photo_resize'] = $value->photo_resize;
                        $post_item[$key]['view'] = $value->view;
                        $post_item[$key]['seo_keyword'] = $value->seo_keyword;
                        $post_item[$key]['seo_description'] = $value->seo_description;
                        $post_item[$key]['seo_content'] = $value->seo_content;
                        $post_item[$key]['created_at'] = $value->created_at;
                        $post_item[$key]['url'] = $url_post[$value->id];
                    }
                    return view('page.main.list-posts',['post_item'=>$post_item,'title_cat'=>$title_cat,'data_post'=>$data_post]);
                }
                else{
                    return view('page.main.list-posts',['title_cat'=>$title_cat]);
                }
            }
            else{
                abort(404);
            }
        }
    }
    public function search(Request $request){
        $url_post = self::url_post();
        $q = $request->get('q');
        $take = 100;
        $paginate = 10;
        $data_search = Posts::search($q,$take,$paginate);
        return view('page.main.search',['data_search'=>$data_search,'q'=>$q,'url_post'=>$url_post]);
    }
    public function array_minus($array_1, $array_2){
        //$array_1 > $array_2
        foreach ($array_1 as $key => $value) {
            if(in_array($value, $array_2)){
                unset($array_1[$key]);
            }
        }
        return $array_1;
    }
    public static function url_post(){
        $row_post = Posts::all();
        if($row_post->count() == 0){
            return false;
        }
        foreach ($row_post as $value) {
            $row_cat_to_link = Categories::where('id',$value->cat_id)->first();
            $row_cat_to_link_array_parent = unserialize($row_cat_to_link->array_parent);
            unset($row_cat_to_link_array_parent[0]);
            array_push($row_cat_to_link_array_parent,$value->cat_id);
            $row_cat_to_link_array_parent = array_values($row_cat_to_link_array_parent);
            $link = '';
            foreach ($row_cat_to_link_array_parent as $value_2) {
                $link .= Categories::where('id', $value_2)->first()->slug . '/';
            }
            $link .= $value->slug;
            $url = route('page.posts',['slug'=>$link]);
            $url_post[$value->id] = $url;
        }
        return $url_post;
    }
    public function get_sub_cat($id_row_cat){
        while(true){
            $get_sub_cat = Categories::where('parent',$id_row_cat)->first();
            if($get_sub_cat == null){
                $get_sub_cat = false;
                break;
            }else{
                $i_id_row_cat = $get_sub_cat->id;
                $id_row_cat = $i_id_row_cat;
                $array_parent_2 = $get_sub_cat->array_parent;
                $array_parent_2 = unserialize($array_parent_2);
                unset($array_parent_2[0]);
                array_push($array_parent_2,$id_row_cat);
            }
        }
        if($get_sub_cat != false){
            $id_cat_of_post = self::array_minus($array_parent_2, $array_parent_1);
        }else{
            $id_cat_of_post = array($id_row_cat);
        }
        return $id_cat_of_post;
    }
    public static function statistics(Request $request){
        $table_statistics = 'statistics';
        $time = date("Y-m-d");
        $cookie_online = 'statistic_online';
        $count_date = DB::table($table_statistics)->where('date',$time)->count();
        if($count_date == 0){
            DB::table($table_statistics)->insert(['date'=>$time,'view'=>1]);
        }
        if(($request->cookie($cookie_online)) == null){
            $get_view = DB::table($table_statistics)->where(['date'=>$time])->first()->view;
            $get_view++;
            $get_view = DB::table($table_statistics)->where(['date'=>$time])->update(['date'=>$time, 'view'=>$get_view]);
            $response = new Response();
            $response->withCookie($cookie_online,"1", 30);
            return $response;
        }
    }
}
