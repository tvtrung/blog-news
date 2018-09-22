<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = "images";
    public static function create_row($data){
    	$field = new Images();
    	$field->title = $data['title'];
    	$field->content = $data['content'];
    	$field->link = $data['link'];
    	$field->status = $data['status'];
    	$field->photo = $data['photo'];
    	$field->type = $data['type'];
    	$field->order = $data['order'];
    	$field->save();
    }
    public static function update_row($data, $id){
        $field = Self::find($id);
        $field->title = $data['title'];
        $field->content = $data['content'];
        $field->link = $data['link'];
        $field->status = $data['status'];
        $field->photo = $data['photo'];
        $field->type = $data['type'];
        $field->order = $data['order'];
        $field->save();
    }
}
