<?php
$dalTablelogin = array();
$dalTablelogin["Username"] = array("type"=>200,"varname"=>"Username", "name" => "Username");
$dalTablelogin["Password"] = array("type"=>200,"varname"=>"Password", "name" => "Password");
$dalTablelogin["FullName"] = array("type"=>200,"varname"=>"FullName", "name" => "FullName");
	$dalTablelogin["Username"]["key"]=true;

$dal_info["vehiclerental_at_localhost__login"] = &$dalTablelogin;
?>