<?php
$dalTablebooking = array();
$dalTablebooking["Book_ID"] = array("type"=>200,"varname"=>"Book_ID", "name" => "Book_ID");
$dalTablebooking["StartDate"] = array("type"=>135,"varname"=>"StartDate", "name" => "StartDate");
$dalTablebooking["EndDate"] = array("type"=>135,"varname"=>"EndDate", "name" => "EndDate");
$dalTablebooking["SecurityDeposit"] = array("type"=>14,"varname"=>"SecurityDeposit", "name" => "SecurityDeposit");
$dalTablebooking["BookStatus"] = array("type"=>200,"varname"=>"BookStatus", "name" => "BookStatus");
$dalTablebooking["VIN"] = array("type"=>200,"varname"=>"VIN", "name" => "VIN");
$dalTablebooking["Bill_ID"] = array("type"=>200,"varname"=>"Bill_ID", "name" => "Bill_ID");
	$dalTablebooking["Book_ID"]["key"]=true;

$dal_info["vehiclerental_at_localhost__booking"] = &$dalTablebooking;
?>