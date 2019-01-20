<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/booking_variables.php");

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
		$layout->customCssPageName = "booking_detailspreview";
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
$page_layouts["booking_detailspreview"] = $layout;




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
if($mastertable == "billing")
{
	$formattedValue = make_db_value("Bill_ID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Bill_ID") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Bill_ID") . "=" . $formattedValue;
}
if($mastertable == "vehicle")
{
	$formattedValue = make_db_value("VIN",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("VIN") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("VIN") . "=" . $formattedValue;
}
if($mastertable == "revenue_by_location")
{
	$formattedValue = make_db_value("Bill_ID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Bill_ID") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Bill_ID") . "=" . $formattedValue;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["Book_ID"]));
	
	
	//	Book_ID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Book_ID", $data, $keylink);
			$row["Book_ID_value"] = $value;
			$format = $pSet->getViewFormat("Book_ID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Book_ID")))
				$class = ' rnr-field-number';
			$row["Book_ID_class"] = $class;
	//	StartDate - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("StartDate", $data, $keylink);
			$row["StartDate_value"] = $value;
			$format = $pSet->getViewFormat("StartDate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("StartDate")))
				$class = ' rnr-field-number';
			$row["StartDate_class"] = $class;
	//	EndDate - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EndDate", $data, $keylink);
			$row["EndDate_value"] = $value;
			$format = $pSet->getViewFormat("EndDate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EndDate")))
				$class = ' rnr-field-number';
			$row["EndDate_class"] = $class;
	//	SecurityDeposit - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SecurityDeposit", $data, $keylink);
			$row["SecurityDeposit_value"] = $value;
			$format = $pSet->getViewFormat("SecurityDeposit");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SecurityDeposit")))
				$class = ' rnr-field-number';
			$row["SecurityDeposit_class"] = $class;
	//	BookStatus - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BookStatus", $data, $keylink);
			$row["BookStatus_value"] = $value;
			$format = $pSet->getViewFormat("BookStatus");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BookStatus")))
				$class = ' rnr-field-number';
			$row["BookStatus_class"] = $class;
	//	VIN - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("VIN", $data, $keylink);
			$row["VIN_value"] = $value;
			$format = $pSet->getViewFormat("VIN");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("VIN")))
				$class = ' rnr-field-number';
			$row["VIN_class"] = $class;
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
$xt->load_template(GetTemplateName("booking", "detailspreview"));
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