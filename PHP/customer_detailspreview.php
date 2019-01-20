<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/customer_variables.php");

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
		$layout->customCssPageName = "customer_detailspreview";
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
$page_layouts["customer_detailspreview"] = $layout;




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
if($mastertable == "address")
{
	$formattedValue = make_db_value("Address_ID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Address_ID") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Address_ID") . "=" . $formattedValue;
}
if($mastertable == "discount")
{
	$formattedValue = make_db_value("Discount_ID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Discount_ID") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Discount_ID") . "=" . $formattedValue;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["Cust_ID"]));
	
	
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
	//	FirstName - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FirstName", $data, $keylink);
			$row["FirstName_value"] = $value;
			$format = $pSet->getViewFormat("FirstName");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FirstName")))
				$class = ' rnr-field-number';
			$row["FirstName_class"] = $class;
	//	MiddleName - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("MiddleName", $data, $keylink);
			$row["MiddleName_value"] = $value;
			$format = $pSet->getViewFormat("MiddleName");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("MiddleName")))
				$class = ' rnr-field-number';
			$row["MiddleName_class"] = $class;
	//	LastName - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("LastName", $data, $keylink);
			$row["LastName_value"] = $value;
			$format = $pSet->getViewFormat("LastName");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("LastName")))
				$class = ' rnr-field-number';
			$row["LastName_class"] = $class;
	//	Status - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Status", $data, $keylink);
			$row["Status_value"] = $value;
			$format = $pSet->getViewFormat("Status");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Status")))
				$class = ' rnr-field-number';
			$row["Status_class"] = $class;
	//	Gender - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Gender", $data, $keylink);
			$row["Gender_value"] = $value;
			$format = $pSet->getViewFormat("Gender");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Gender")))
				$class = ' rnr-field-number';
			$row["Gender_class"] = $class;
	//	DOB - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DOB", $data, $keylink);
			$row["DOB_value"] = $value;
			$format = $pSet->getViewFormat("DOB");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DOB")))
				$class = ' rnr-field-number';
			$row["DOB_class"] = $class;
	//	Email - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Email", $data, $keylink);
			$row["Email_value"] = $value;
			$format = $pSet->getViewFormat("Email");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Email")))
				$class = ' rnr-field-number';
			$row["Email_class"] = $class;
	//	PhoneNum - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PhoneNum", $data, $keylink);
			$row["PhoneNum_value"] = $value;
			$format = $pSet->getViewFormat("PhoneNum");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PhoneNum")))
				$class = ' rnr-field-number';
			$row["PhoneNum_class"] = $class;
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
	//	Address_ID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Address_ID", $data, $keylink);
			$row["Address_ID_value"] = $value;
			$format = $pSet->getViewFormat("Address_ID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Address_ID")))
				$class = ' rnr-field-number';
			$row["Address_ID_class"] = $class;
	//	LicenceNum - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("LicenceNum", $data, $keylink);
			$row["LicenceNum_value"] = $value;
			$format = $pSet->getViewFormat("LicenceNum");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("LicenceNum")))
				$class = ' rnr-field-number';
			$row["LicenceNum_class"] = $class;
	//	InsuranceNum - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("InsuranceNum", $data, $keylink);
			$row["InsuranceNum_value"] = $value;
			$format = $pSet->getViewFormat("InsuranceNum");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("InsuranceNum")))
				$class = ' rnr-field-number';
			$row["InsuranceNum_class"] = $class;
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
$xt->load_template(GetTemplateName("customer", "detailspreview"));
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