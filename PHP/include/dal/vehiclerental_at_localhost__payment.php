<?php
$dalTablepayment = array();
$dalTablepayment["Payment_ID"] = array("type"=>200,"varname"=>"Payment_ID", "name" => "Payment_ID");
$dalTablepayment["PaymentType"] = array("type"=>200,"varname"=>"PaymentType", "name" => "PaymentType");
$dalTablepayment["TransactionNum"] = array("type"=>200,"varname"=>"TransactionNum", "name" => "TransactionNum");
$dalTablepayment["Cust_ID"] = array("type"=>200,"varname"=>"Cust_ID", "name" => "Cust_ID");
$dalTablepayment["Bill_ID"] = array("type"=>200,"varname"=>"Bill_ID", "name" => "Bill_ID");
	$dalTablepayment["Payment_ID"]["key"]=true;

$dal_info["vehiclerental_at_localhost__payment"] = &$dalTablepayment;
?>