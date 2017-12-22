<?php
class Route{
	
private static $home = "/".HOME."/";

public static function get($route,$get){
	$ref = self::$home.$route.".php?";
	$vars = explode(':',$get);
	for($x = 0 ; $x < count($vars) ; $x++){
		if($x == (count($vars)-1)){
			$ref .= $vars[$x];
			break;
		}else{
			$ref .= $vars[$x]."&";
		}
	}
	header("location:".$ref);
}
	
}
?>