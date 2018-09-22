<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
	protected $table = 'page_faq';
    public static function get_faq(){
    	return self::orderBy('order')->get();
    }
    public static function get_faq_show(){
        return self::orderBy('order')->where('status',1)->get();
    }
    public static function create($input){
    	$faq = new Faq();

    	$faq->order = $input['order'];
    	$faq->name = $input['fullname'];
    	$faq->email = $input['email'];
    	$faq->website = $input['website'];
    	$faq->question = $input['question'];
    	$faq->content = $input['answer'];
    	$faq->status = $input['status'];

    	$faq->save();
    }
    public static function update_status($id) {
        $faq = self::find($id);
        if($faq->status == 1){
            $status = 0;
        }else{
            $status = 1;
        }
        $faq->status = $status;
        $faq->save();
        return $faq;
    }
    public static function detail($id) {
    	$faq = self::find($id);
    	return $faq;
    }
    public static function update_faq($id, $input){
    	$faq = self::find($id);

    	$faq->order = $input['order'];
    	$faq->name = $input['fullname'];
    	$faq->email = $input['email'];
    	$faq->website = $input['website'];
    	$faq->question = $input['question'];
    	$faq->content = $input['answer'];
    	$faq->status = $input['status'];

    	$faq->save();
    	return $faq;
    }
    public static function update_order($id, $order){
        $faq = self::find($id);
        $faq->order = $order;
        $faq->save();
        return $faq;
    }
}
