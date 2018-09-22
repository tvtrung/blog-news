<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newletter extends Model
{
	public $table = 'contact_form';

    public static function postNewletter($input){
    	$newletter = new Newletter();
    	$newletter->email = $input['email'];
    	$newletter->content = $input['content'];
    	$newletter->save();
    }
}
