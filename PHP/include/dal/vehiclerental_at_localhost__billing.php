<?php
$dalTablebilling = array();
$dalTablebilling["Bill_ID"] = array("type"=>200,"varname"=>"Bill_ID", "name" => "Bill_ID");
$dalTablebilling["TotalAmount"] = array("type"=>14,"varname"=>"TotalAmount", "name" => "TotalAmount");
$dalTablebilling["BillDate"] = array("type"=>135,"varname"=>"BillDate", "name" => "BillDate");
$dalTablebilling["BillStatus"] = array("type"=>200,"varname"=>"BillStatus", "name" => "BillStatus");
$dalTablebilling["AmountTax"] = array("type"=>14,"varname"=>"AmountTax", "name" => "AmountTax");
$dalTablebilling["AmountBalance"] = array("type"=>14,"varname"=>"AmountBalance", "name" => "AmountBalance");
$dalTablebilling["AmountAdvance"] = array("type"=>14,"varname"=>"AmountAdvance", "name" => "AmountAdvance");
$dalTablebilling["Discount_ID"] = array("type"=>200,"varname"=>"Discount_ID", "name" => "Discount_ID");
$dalTablebilling["Cust_ID"] = array("type"=>200,"varname"=>"Cust_ID", "name" => "Cust_ID");
$dalTablebilling["Location_ID"] = array("type"=>200,"varname"=>"Location_ID", "name" => "Location_ID");
	$dalTablebilling["Bill_ID"]["key"]=true;

$dal_info["vehiclerental_at_localhost__billing"] = &$dalTablebilling;
?>