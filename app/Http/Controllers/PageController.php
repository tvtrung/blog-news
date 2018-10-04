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

class PageController extends Controller
{
    public function home(){
    	return view('page.main.main');
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
                //Hiển thì view bài viết
                $post_item['title'] = $row_post->title;
                $post_item['description'] = $row_post->description;
                $post_item['content'] = $row_post->content;
                $post_item['view'] = $row_post->view;
                $post_item['seo_keyword'] = $row_post->seo_keyword;
                $post_item['seo_description'] = $row_post->seo_description;
                $post_item['seo_content'] = $row_post->seo_content;
                $post_item['created_at'] = $row_post->created_at;
                return view('page.main.detail-post',['post_item'=>$post_item,'row_relative_post'=>$row_relative_post,'url_post'=>$url_post]);
            }
            else{
                abort(404);
            }
            if(($request->cookie("post-" . $end_slug)) == null){
                Posts::view_plus($end_slug);
                $response = new Response();
                $response->withCookie("post-" . $end_slug,"1", 3);
                return $response;
            }
        }
        else{
            $row_cat = Categories::where('slug',$end_slug)->first();
            $title_cat = $row_cat->title;
            if($row_cat == null){
                abort(404);
            }
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
            if($result == true){
                //Hiển thị bài viết theo cat
                //$id_cat_of_post
                //var_dump($id_cat_of_post);
                $data_post = Posts::whereIn('cat_id',$id_cat_of_post)->orderBy('id','desc')->where('status',1)->paginate(10);
                if($data_post->count() > 0){
                    foreach ($data_post as $key => $value) {
                        $post_item[$key]['title'] = $value->title;
                        $post_item[$key]['description'] = $value->description;
                        $post_item[$key]['content'] = $value->content;
                        $post_item[$key]['photo'] = url('uploads/posts') . '/' . $value->photo;
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
    public function array_minus($array_1, $array_2){
        //$array_1 > $array_2
        foreach ($array_1 as $key => $value) {
            if(in_array($value, $array_2)){
                unset($array_1[$key]);
            }
        }
        return $array_1;
    }
    public function url_post(){
        $row_post = Posts::all();
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
}
