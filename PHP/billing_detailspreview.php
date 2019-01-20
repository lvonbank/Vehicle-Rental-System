<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/billing_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview_bootstrap", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
		$layout->customCssPageName = "billing_detailspreview";
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"bsdetailspreviewcount",
	"block"=>"", "substyle"=>1  );

$layout->skins["dcount"] = "";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields",
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["billing_detailspreview"] = $layout;




$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
$sessionPrefix = "_detailsPreview";
if($mastertable != "")
{
	$_SESSION[$sessionPrefix."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$sessionPrefix."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$sessionPrefix."_masterkey".$i]))
		unset($_SESSION[$sessionPrefix."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$sessionPrefix."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new DetailsPreview($params);

$pSet = new ProjectSettings($strTableName, PAGE_LIST);


$whereClauses = array();
if($mastertable == "customer")
{
	$formattedValue = make_db_value("Cust_ID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Cust_ID") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Cust_ID") . "=" . $formattedValue;
}
if($mastertable == "discount")
{
	$formattedValue = make_db_value("Discount_ID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Discount_ID") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Discount_ID") . "=" . $formattedValue;
}
if($mastertable == "location")
{
	$formattedValue = make_db_value("Location_ID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Location_ID") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Location_ID") . "=" . $formattedValue;
}

$whereClauses[] = SecuritySQL("Search", $strTableName);
$query = $pSet->getSQLQuery();

$strSQL = $query->buildSQL_default( $whereClauses );
$rowcount = $pageObject->connection->getFetchedRowsNumber( $strSQL );

$strSQL .= $pageObject->getOrderByClause();

$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["Bill_ID"]));
	
	
	//	Bill_ID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Bill_ID", $data, $keylink);
			$row["Bill_ID_value"] = $value;
			$format = $pSet->getViewFormat("Bill_ID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Bill_ID")))
				$class = ' rnr-field-number';
			$row["Bill_ID_class"] = $class;
	//	TotalAmount - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TotalAmount", $data, $keylink);
			$row["TotalAmount_value"] = $value;
			$format = $pSet->getViewFormat("TotalAmount");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TotalAmount")))
				$class = ' rnr-field-number';
			$row["TotalAmount_class"] = $class;
	//	BillDate - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BillDate", $data, $keylink);
			$row["BillDate_value"] = $value;
			$format = $pSet->getViewFormat("BillDate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BillDate")))
				$class = ' rnr-field-number';
			$row["BillDate_class"] = $class;
	//	BillStatus - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BillStatus", $data, $keylink);
			$row["BillStatus_value"] = $value;
			$format = $pSet->getViewFormat("BillStatus");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BillStatus")))
				$class = ' rnr-field-number';
			$row["BillStatus_class"] = $class;
	//	AmountTax - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("AmountTax", $data, $keylink);
			$row["AmountTax_value"] = $value;
			$format = $pSet->getViewFormat("AmountTax");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("AmountTax")))
				$class = ' rnr-field-number';
			$row["AmountTax_class"] = $class;
	//	AmountBalance - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("AmountBalance", $data, $keylink);
			$row["AmountBalance_value"] = $value;
			$format = $pSet->getViewFormat("AmountBalance");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("AmountBalance")))
				$class = ' rnr-field-number';
			$row["AmountBalance_class"] = $class;
	//	AmountAdvance - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("AmountAdvance", $data, $keylink);
			$row["AmountAdvance_value"] = $value;
			$format = $pSet->getViewFormat("AmountAdvance");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("AmountAdvance")))
				$class = ' rnr-field-number';
			$row["AmountAdvance_class"] = $class;
	//	Discount_ID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Discount_ID", $data, $keylink);
			$row["Discount_ID_value"] = $value;
			$format = $pSet->getViewFormat("Discount_ID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Discount_ID")))
				$class = ' rnr-field-number';
			$row["Discount_ID_class"] = $class;
	//	Cust_ID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Cust_ID", $data, $keylink);
			$row["Cust_ID_value"] = $value;
			$format = $pSet->getViewFormat("Cust_ID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Cust_ID")))
				$class = ' rnr-field-number';
			$row["Cust_ID_class"] = $class;
	//	Location_ID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Location_ID", $data, $keylink);
			$row["Location_ID_value"] = $value;
			$format = $pSet->getViewFormat("Location_ID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Location_ID")))
				$class = ' rnr-field-number';
			$row["Location_ID_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("billing", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), mobileDeviceDetected() && $layout->version != BOOTSTRAP_LAYOUT) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>