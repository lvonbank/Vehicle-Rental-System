<?php
$dalTablevehicle = array();
$dalTablevehicle["VIN"] = array("type"=>200,"varname"=>"VIN", "name" => "VIN");
$dalTablevehicle["Year"] = array("type"=>7,"varname"=>"Year", "name" => "Year");
$dalTablevehicle["Make"] = array("type"=>200,"varname"=>"Make", "name" => "Make");
$dalTablevehicle["Model"] = array("type"=>200,"varname"=>"Model", "name" => "Model");
$dalTablevehicle["Mileage"] = array("type"=>14,"varname"=>"Mileage", "name" => "Mileage");
$dalTablevehicle["Type"] = array("type"=>200,"varname"=>"Type", "name" => "Type");
$dalTablevehicle["DriveTrain"] = array("type"=>200,"varname"=>"DriveTrain", "name" => "DriveTrain");
$dalTablevehicle["CostPerMile"] = array("type"=>14,"varname"=>"CostPerMile", "name" => "CostPerMile");
$dalTablevehicle["RegistrationNum"] = array("type"=>200,"varname"=>"RegistrationNum", "name" => "RegistrationNum");
	$dalTablevehicle["VIN"]["key"]=true;

$dal_info["vehiclerental_at_localhost__vehicle"] = &$dalTablevehicle;
?>