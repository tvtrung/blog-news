<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public $table = 'posts';
    public static function update_data($input, $id){
    	$row = self::find($id);
    	$row->title = $input['title'];
    	$row->slug = $input['slug'];
    	$row->cat_id = $input['list-cats-id'];
    	$row->photo = $input['photo'];
    	$row->description = $input['description'];
    	$row->content = $input['content'];
    	$row->seo_keyword = $input['seo_keyword'];
    	$row->seo_description = $input['seo_description'];
    	$row->seo_content = $input['seo_content'];
    	$row->status = $input['status'];
    	$row->save();
    }
    public static function store_data($input){
    	$row = new Posts();
    	$row->title = $input['title'];
    	$row->slug = $input['slug'];
    	$row->cat_id = $input['list-cats-id'];
    	$row->photo = $input['photo'];
    	$row->description = $input['description'];
        $row->content = $input['content'];
    	$row->view = $input['view'];
    	$row->seo_keyword = $input['seo_keyword'];
    	$row->seo_description = $input['seo_description'];
    	$row->seo_content = $input['seo_content'];
    	$row->status = $input['status'];
    	$row->save();
    }
    public static function detail($id) {
    	$row = self::find($id);
    	return $row;
    }
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
    public static function view_plus($post){
    	$row_post = Posts::where('slug',$post)->firstOrFail();
        $row_post->view += 1;
        $row_post->save();
    }
}
