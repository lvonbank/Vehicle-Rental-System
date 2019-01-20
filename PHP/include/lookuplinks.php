<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["discount"]["billing.Discount_ID"]["edit"] = array("table" => "billing", "field" => "Discount_ID", "page" => "edit");
	$lookupTableLinks["customer"]["billing.Cust_ID"]["edit"] = array("table" => "billing", "field" => "Cust_ID", "page" => "edit");
	$lookupTableLinks["location"]["billing.Location_ID"]["edit"] = array("table" => "billing", "field" => "Location_ID", "page" => "edit");
	$lookupTableLinks["vehicle"]["booking.VIN"]["edit"] = array("table" => "booking", "field" => "VIN", "page" => "edit");
	$lookupTableLinks["billing"]["booking.Bill_ID"]["edit"] = array("table" => "booking", "field" => "Bill_ID", "page" => "edit");
	$lookupTableLinks["discount"]["customer.Discount_ID"]["edit"] = array("table" => "customer", "field" => "Discount_ID", "page" => "edit");
	$lookupTableLinks["address"]["customer.Address_ID"]["edit"] = array("table" => "customer", "field" => "Address_ID", "page" => "edit");
	$lookupTableLinks["vehicle"]["instock.VIN"]["edit"] = array("table" => "instock", "field" => "VIN", "page" => "edit");
	$lookupTableLinks["location"]["instock.Location_ID"]["edit"] = array("table" => "instock", "field" => "Location_ID", "page" => "edit");
	$lookupTableLinks["address"]["location.Address_ID"]["edit"] = array("table" => "location", "field" => "Address_ID", "page" => "edit");
	$lookupTableLinks["customer"]["payment.Cust_ID"]["edit"] = array("table" => "payment", "field" => "Cust_ID", "page" => "edit");
	$lookupTableLinks["billing"]["payment.Bill_ID"]["edit"] = array("table" => "payment", "field" => "Bill_ID", "page" => "edit");
	$lookupTableLinks["location"]["revenue_by_location.Location_ID"]["search"] = array("table" => "revenue_by_location", "field" => "Location_ID", "page" => "search");
}

?>