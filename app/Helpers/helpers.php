<?php  
function isActive($routeName, $className){
	if(Route($routeName) == Request::url()){
		echo $className;
	}
}
function areActive($routeName, $className){
	$count = count($routeName);
	for($i = 0; $i < $count; $i++){
		if(Route($routeName[$i]) == Request::url()){
			echo $className;
			break;
		}
	}
}
function setActive($path, $className) {
    return Request::is($path . '*') ? $className : '';
}
function limit_words($string, $word_limit) {
	$string = strip_tags($string);
	$words = explode(' ', strip_tags($string));
	$return = trim(implode(' ', array_slice($words, 0, $word_limit)));
	if(strlen($return) < strlen($string)){
		$return .= '...';
	}
	return $return;
}
function img_size($photo, $photo_resize, $x, $y){
	if($photo_resize == null){
		return $photo;
	}else{
		$arr_photo = json_decode($photo_resize, true);
		return isset($arr_photo['size_'. $x . 'x' . $y]) ? $arr_photo['size_'. $x . 'x' . $y] : $photo;
	}
}