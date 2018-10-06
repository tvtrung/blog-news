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
    	$row = self::find($id);
    	return $row;
    }
    public static function update_order($id, $order){
        $row = self::find($id);
        $row->order = $order;
        $row->save();
        return $row;
    }
    public static function create_data($input){
    	$row = new Categories();
        $row->parent = $input['parent'];
    	$row->array_parent = $input['array_parent'];
    	$row->title = $input['title'];
    	$row->slug = $input['slug'];
        $row->order = $input['order'];
    	$row->position = $input['position'];
        $row->status = $input['status'];
    	$row->url = $input['link'];
    	$row->save();
    }
    public static function update_data($input, $id){
    	$row = self::find($id);
    	$row->parent = $input['parent'];
        $row->array_parent = $input['array_parent'];
    	$row->title = $input['title'];
    	$row->slug = $input['slug'];
    	$row->order = $input['order'];
        $row->position = $input['position'];
    	$row->status = $input['status'];
        $row->url = $input['link'];
    	$row->save();
    }
}
