<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
   	protected $table = "users";
    public static function create_row($data){
    	$field = new Users();
    	$field->name = $data['name'];
    	$field->email = $data['email'];
    	$field->password = $data['password'];
    	$field->save();
    }
    public static function update_row($id, $data){
    	$field = self::findOrFail($id);
    	$field->name = $data['name'];
    	if(isset($data['password'])){
	    	$field->password = $data['password'];
	    }
    	$field->save();
    }
}
