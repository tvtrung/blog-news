<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
	
    public static function get_list(){
    	return self::orderBy('order')->get();
    }
    public static function get_price_show(){
        return self::orderBy('order')->where('status',1)->get();
    }
    public static function create($input){
    	$product = new Products();

    	$product->order = $input['order'];
    	$product->title = $input['title'];
    	$product->price = $input['price'];
    	$product->content = $input['content'];
    	$product->link = $input['link'];
    	$product->status = $input['status'];

    	$product->save();
    }
    public static function update_status($id) {
        $product = self::find($id);
        if($product->status == 1){
            $status = 0;
        }else{
            $status = 1;
        }
        $product->status = $status;
        $product->save();
        return $product;
    }
    public static function detail($id) {
    	$product = self::find($id);
    	return $product;
    }
    public static function update_price($id, $input){
    	$product = self::find($id);

    	$product->order = $input['order'];
    	$product->title = $input['title'];
    	$product->price = $input['price'];
    	$product->content = $input['content'];
    	$product->link = $input['link'];
    	$product->status = $input['status'];

    	$product->save();
    	return $product;
    }
    public static function update_order($id, $order){
        $product = self::find($id);
        $product->order = $order;
        $product->save();
        return $product;
    }
}
