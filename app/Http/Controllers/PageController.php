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
    public function posts(Request $request, $cat, $post){
        $row_cat = Categories::where('slug',$cat)->firstOrFail();
        $row_post = Posts::where('slug',$post)->firstOrFail();
        if($row_cat->id == $row_post->cat_id){
            echo $row_post->title;
        }
        else{
            abort(404);
        }
        if(($request->cookie("post-" . $post)) == null){
            Posts::view_plus($post);
            $response = new Response();
            $response->withCookie("post-" . $post,"1", 3);
            return $response;
        }
    }
}
