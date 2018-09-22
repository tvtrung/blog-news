<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";
    public static function update_status($id) {
        $row = self::find($id);
        if($row->status == 1){
            $status = 0;
        }else{
            $status = 1;
        }
        $row->status = $status;
        $row->save();
        return $row;
    }
    public static function detail($id) {
    	$product = self::find($id);
    	return $product;
    }
    public static function update_order($id, $order){
        $product = self::find($id);
        $product->order = $order;
        $product->save();
        return $product;
    }
}
