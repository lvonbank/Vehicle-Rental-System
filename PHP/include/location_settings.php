<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalocation = array();
	$tdatalocation[".truncateText"] = true;
	$tdatalocation[".NumberOfChars"] = 80;
	$tdatalocation[".ShortName"] = "location";
	$tdatalocation[".OwnerID"] = "";
	$tdatalocation[".OriginalTable"] = "location";

//	field labels
$fieldLabelslocation = array();
$fieldToolTipslocation = array();
$pageTitleslocation = array();
$placeHolderslocation = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslocation["English"] = array();
	$fieldToolTipslocation["English"] = array();
	$placeHolderslocation["English"] = array();
	$pageTitleslocation["English"] = array();
	$fieldLabelslocation["English"]["Location_ID"] = "Location ID";
	$fieldToolTipslocation["English"]["Location_ID"] = "";
	$placeHolderslocation["English"]["Location_ID"] = "";
	$fieldLabelslocation["English"]["PhoneNum"] = "Phone Num";
	$fieldToolTipslocation["English"]["PhoneNum"] = "";
	$placeHolderslocation["English"]["PhoneNum"] = "";
	$fieldLabelslocation["English"]["Address_ID"] = "Address ID";
	$fieldToolTipslocation["English"]["Address_ID"] = "";
	$placeHolderslocation["English"]["Address_ID"] = "";
	if (count($fieldToolTipslocation["English"]))
		$tdatalocation[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslocation[""] = array();
	$fieldToolTipslocation[""] = array();
	$placeHolderslocation[""] = array();
	$pageTitleslocation[""] = array();
	if (count($fieldToolTipslocation[""]))
		$tdatalocation[".isUseToolTips"] = true;
}


	$tdatalocation[".NCSearch"] = true;



$tdatalocation[".shortTableName"] = "location";
$tdatalocation[".nSecOptions"] = 0;
$tdatalocation[".recsPerRowPrint"] = 1;
$tdatalocation[".mainTableOwnerID"] = "";
$tdatalocation[".moveNext"] = 1;
$tdatalocation[".entityType"] = 0;

$tdatalocation[".strOriginalTableName"] = "location";

	



$tdatalocation[".showAddInPopup"] = false;

$tdatalocation[".showEditInPopup"] = false;

$tdatalocation[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalocation[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalocation[".fieldsForRegister"] = array();

$tdatalocation[".listAjax"] = false;

	$tdatalocation[".audit"] = false;

	$tdatalocation[".locking"] = false;

$tdatalocation[".edit"] = true;
$tdatalocation[".afterEditAction"] = 1;
$tdatalocation[".closePopupAfterEdit"] = 1;
$tdatalocation[".afterEditActionDetTable"] = "";

$tdatalocation[".add"] = true;
$tdatalocation[".afterAddAction"] = 1;
$tdatalocation[".closePopupAfterAdd"] = 1;
$tdatalocation[".afterAddActionDetTable"] = "";

$tdatalocation[".list"] = true;



$tdatalocation[".reorderRecordsByHeader"] = true;


$tdatalocation[".exportFormatting"] = 2;
$tdatalocation[".exportDelimiter"] = ",";
		
$tdatalocation[".view"] = true;

$tdatalocation[".import"] = true;

$tdatalocation[".exportTo"] = true;

$tdatalocation[".printFriendly"] = true;

$tdatalocation[".delete"] = true;

$tdatalocation[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatalocation[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatalocation[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatalocation[".searchSaving"] = false;
//

$tdatalocation[".showSearchPanel"] = true;
		$tdatalocation[".flexibleSearch"] = true;

$tdatalocation[".isUseAjaxSuggest"] = true;

$tdatalocation[".rowHighlite"] = true;





$tdatalocation[".ajaxCodeSnippetAdded"] = false;

$tdatalocation[".buttonsAdded"] = false;

$tdatalocation[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalocation[".isUseTimeForSearch"] = false;





$tdatalocation[".allSearchFields"] = array();
$tdatalocation[".filterFields"] = array();
$tdatalocation[".requiredSearchFields"] = array();

$tdatalocation[".allSearchFields"][] = "Location_ID";
	$tdatalocation[".allSearchFields"][] = "PhoneNum";
	$tdatalocation[".allSearchFields"][] = "Address_ID";
	

$tdatalocation[".googleLikeFields"] = array();
$tdatalocation[".googleLikeFields"][] = "Location_ID";
$tdatalocation[".googleLikeFields"][] = "PhoneNum";
$tdatalocation[".googleLikeFields"][] = "Address_ID";


$tdatalocation[".advSearchFields"] = array();
$tdatalocation[".advSearchFields"][] = "Location_ID";
$tdatalocation[".advSearchFields"][] = "PhoneNum";
$tdatalocation[".advSearchFields"][] = "Address_ID";

$tdatalocation[".tableType"] = "list";

$tdatalocation[".printerPageOrientation"] = 0;
$tdatalocation[".nPrinterPageScale"] = 100;

$tdatalocation[".nPrinterSplitRecords"] = 40;

$tdatalocation[".nPrinterPDFSplitRecords"] = 40;



$tdatalocation[".geocodingEnabled"] = false;





$tdatalocation[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatalocation[".pageSize"] = 20;

$tdatalocation[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalocation[".strOrderBy"] = $tstrOrderBy;

$tdatalocation[".orderindexes"] = array();

$tdatalocation[".sqlHead"] = "SELECT Location_ID,  	PhoneNum,  	Address_ID";
$tdatalocation[".sqlFrom"] = "FROM location";
$tdatalocation[".sqlWhereExpr"] = "";
$tdatalocation[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalocation[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalocation[".arrGroupsPerPage"] = $arrGPP;

$tdatalocation[".highlightSearchResults"] = true;

$tableKeyslocation = array();
$tableKeyslocation[] = "Location_ID";
$tdatalocation[".Keys"] = $tableKeyslocation;

$tdatalocation[".listFields"] = array();
$tdatalocation[".listFields"][] = "Location_ID";
$tdatalocation[".listFields"][] = "PhoneNum";
$tdatalocation[".listFields"][] = "Address_ID";

$tdatalocation[".hideMobileList"] = array();


$tdatalocation[".viewFields"] = array();
$tdatalocation[".viewFields"][] = "Location_ID";
$tdatalocation[".viewFields"][] = "PhoneNum";
$tdatalocation[".viewFields"][] = "Address_ID";

$tdatalocation[".addFields"] = array();
$tdatalocation[".addFields"][] = "Location_ID";
$tdatalocation[".addFields"][] = "PhoneNum";
$tdatalocation[".addFields"][] = "Address_ID";

$tdatalocation[".masterListFields"] = array();
$tdatalocation[".masterListFields"][] = "Location_ID";
$tdatalocation[".masterListFields"][] = "PhoneNum";
$tdatalocation[".masterListFields"][] = "Address_ID";

$tdatalocation[".inlineAddFields"] = array();
$tdatalocation[".inlineAddFields"][] = "Location_ID";
$tdatalocation[".inlineAddFields"][] = "PhoneNum";
$tdatalocation[".inlineAddFields"][] = "Address_ID";

$tdatalocation[".editFields"] = array();
$tdatalocation[".editFields"][] = "Location_ID";
$tdatalocation[".editFields"][] = "PhoneNum";
$tdatalocation[".editFields"][] = "Address_ID";

$tdatalocation[".inlineEditFields"] = array();
$tdatalocation[".inlineEditFields"][] = "Location_ID";
$tdatalocation[".inlineEditFields"][] = "PhoneNum";
$tdatalocation[".inlineEditFields"][] = "Address_ID";

$tdatalocation[".updateSelectedFields"] = array();
$tdatalocation[".updateSelectedFields"][] = "Location_ID";
$tdatalocation[".updateSelectedFields"][] = "PhoneNum";
$tdatalocation[".updateSelectedFields"][] = "Address_ID";


$tdatalocation[".exportFields"] = array();
$tdatalocation[".exportFields"][] = "Location_ID";
$tdatalocation[".exportFields"][] = "PhoneNum";
$tdatalocation[".exportFields"][] = "Address_ID";

$tdatalocation[".importFields"] = array();
$tdatalocation[".importFields"][] = "Location_ID";
$tdatalocation[".importFields"][] = "PhoneNum";
$tdatalocation[".importFields"][] = "Address_ID";

$tdatalocation[".printFields"] = array();
$tdatalocation[".printFields"][] = "Location_ID";
$tdatalocation[".printFields"][] = "PhoneNum";
$tdatalocation[".printFields"][] = "Address_ID";


//	Location_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Location_ID";
	$fdata["GoodName"] = "Location_ID";
	$fdata["ownerTable"] = "location";
	$fdata["Label"] = GetFieldLabel("location","Location_ID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Location_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Location_ID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalocation["Location_ID"] = $fdata;
//	PhoneNum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PhoneNum";
	$fdata["GoodName"] = "PhoneNum";
	$fdata["ownerTable"] = "location";
	$fdata["Label"] = GetFieldLabel("location","PhoneNum");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PhoneNum";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PhoneNum";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalocation["PhoneNum"] = $fdata;
//	Address_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Address_ID";
	$fdata["GoodName"] = "Address_ID";
	$fdata["ownerTable"] = "location";
	$fdata["Label"] = GetFieldLabel("location","Address_ID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Address_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Address_ID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "address";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Address_ID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Address_ID";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalocation["Address_ID"] = $fdata;


$tables_data["location"]=&$tdatalocation;
$field_labels["location"] = &$fieldLabelslocation;
$fieldToolTips["location"] = &$fieldToolTipslocation;
$placeHolders["location"] = &$placeHolderslocation;
$page_titles["location"] = &$pageTitleslocation;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["location"] = array();
//	billing
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="billing";
		$detailsParam["dOriginalTable"] = "billing";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "billing";
	$detailsParam["dCaptionTable"] = GetTableCaption("billing");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["location"][$dIndex] = $detailsParam;

	
		$detailsTablesData["location"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["location"][$dIndex]["masterKeys"][]="Location_ID";

				$detailsTablesData["location"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["location"][$dIndex]["detailKeys"][]="Location_ID";
//	instock
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="instock";
		$detailsParam["dOriginalTable"] = "instock";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "instock";
	$detailsParam["dCaptionTable"] = GetTableCaption("instock");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["location"][$dIndex] = $detailsParam;

	
		$detailsTablesData["location"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["location"][$dIndex]["masterKeys"][]="Location_ID";

				$detailsTablesData["location"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["location"][$dIndex]["detailKeys"][]="Location_ID";
//	revenue_by_location
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="revenue_by_location";
		$detailsParam["dOriginalTable"] = "billing";
		$detailsParam["proceedLink"] = true;
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "revenue_by_location";
	$detailsParam["dCaptionTable"] = GetTableCaption("revenue_by_location");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["location"][$dIndex] = $detailsParam;

	
		$detailsTablesData["location"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["location"][$dIndex]["masterKeys"][]="Location_ID";

				$detailsTablesData["location"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["location"][$dIndex]["detailKeys"][]="Location_ID";

// tables which are master tables for current table (detail)
$masterTablesData["location"] = array();


	
				$strOriginalDetailsTable="address";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="address";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "address";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["location"][0] = $masterParams;
				$masterTablesData["location"][0]["masterKeys"] = array();
	$masterTablesData["location"][0]["masterKeys"][]="Address_ID";
				$masterTablesData["location"][0]["detailKeys"] = array();
	$masterTablesData["location"][0]["detailKeys"][]="Address_ID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_location()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Location_ID,  	PhoneNum,  	Address_ID";
$proto0["m_strFrom"] = "FROM location";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "Location_ID",
	"m_strTable" => "location",
	"m_srcTableName" => "location"
));

$proto6["m_sql"] = "Location_ID";
$proto6["m_srcTableName"] = "location";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PhoneNum",
	"m_strTable" => "location",
	"m_srcTableName" => "location"
));

$proto8["m_sql"] = "PhoneNum";
$proto8["m_srcTableName"] = "location";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Address_ID",
	"m_strTable" => "location",
	"m_srcTableName" => "location"
));

$proto10["m_sql"] = "Address_ID";
$proto10["m_srcTableName"] = "location";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "location";
$proto13["m_srcTableName"] = "location";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Location_ID";
$proto13["m_columns"][] = "PhoneNum";
$proto13["m_columns"][] = "Address_ID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "location";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "location";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="location";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_location = createSqlQuery_location();


	
		;

			

$tdatalocation[".sqlquery"] = $queryData_location;

$tableEvents["location"] = new eventsBase;
$tdatalocation[".hasEvents"] = false;

?>