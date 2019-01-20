<?php
$dalTableaddress = array();
$dalTableaddress["Address_ID"] = array("type"=>200,"varname"=>"Address_ID", "name" => "Address_ID");
$dalTableaddress["Street"] = array("type"=>200,"varname"=>"Street", "name" => "Street");
$dalTableaddress["City"] = array("type"=>200,"varname"=>"City", "name" => "City");
$dalTableaddress["Region"] = array("type"=>200,"varname"=>"Region", "name" => "Region");
$dalTableaddress["Country"] = array("type"=>200,"varname"=>"Country", "name" => "Country");
$dalTableaddress["Zip"] = array("type"=>200,"varname"=>"Zip", "name" => "Zip");
	$dalTableaddress["Address_ID"]["key"]=true;

$dal_info["vehiclerental_at_localhost__address"] = &$dalTableaddress;
?>