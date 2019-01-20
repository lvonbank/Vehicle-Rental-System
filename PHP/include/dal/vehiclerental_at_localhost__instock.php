<?php
$dalTableinstock = array();
$dalTableinstock["VIN"] = array("type"=>200,"varname"=>"VIN", "name" => "VIN");
$dalTableinstock["Location_ID"] = array("type"=>200,"varname"=>"Location_ID", "name" => "Location_ID");
$dalTableinstock["Avalible"] = array("type"=>200,"varname"=>"Avalible", "name" => "Avalible");
	$dalTableinstock["VIN"]["key"]=true;
	$dalTableinstock["Location_ID"]["key"]=true;

$dal_info["vehiclerental_at_localhost__instock"] = &$dalTableinstock;
?>