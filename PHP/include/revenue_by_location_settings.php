<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarevenue_by_location = array();
	$tdatarevenue_by_location[".truncateText"] = true;
	$tdatarevenue_by_location[".NumberOfChars"] = 80;
	$tdatarevenue_by_location[".ShortName"] = "revenue_by_location";
	$tdatarevenue_by_location[".OwnerID"] = "";
	$tdatarevenue_by_location[".OriginalTable"] = "billing";

//	field labels
$fieldLabelsrevenue_by_location = array();
$fieldToolTipsrevenue_by_location = array();
$pageTitlesrevenue_by_location = array();
$placeHoldersrevenue_by_location = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrevenue_by_location["English"] = array();
	$fieldToolTipsrevenue_by_location["English"] = array();
	$placeHoldersrevenue_by_location["English"] = array();
	$pageTitlesrevenue_by_location["English"] = array();
	$fieldLabelsrevenue_by_location["English"]["Location_ID"] = "Location ID";
	$fieldToolTipsrevenue_by_location["English"]["Location_ID"] = "";
	$placeHoldersrevenue_by_location["English"]["Location_ID"] = "";
	$fieldLabelsrevenue_by_location["English"]["Revenue_By_Location"] = "Revenue By Location";
	$fieldToolTipsrevenue_by_location["English"]["Revenue_By_Location"] = "";
	$placeHoldersrevenue_by_location["English"]["Revenue_By_Location"] = "";
	if (count($fieldToolTipsrevenue_by_location["English"]))
		$tdatarevenue_by_location[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrevenue_by_location[""] = array();
	$fieldToolTipsrevenue_by_location[""] = array();
	$placeHoldersrevenue_by_location[""] = array();
	$pageTitlesrevenue_by_location[""] = array();
	if (count($fieldToolTipsrevenue_by_location[""]))
		$tdatarevenue_by_location[".isUseToolTips"] = true;
}


	$tdatarevenue_by_location[".NCSearch"] = true;



$tdatarevenue_by_location[".shortTableName"] = "revenue_by_location";
$tdatarevenue_by_location[".nSecOptions"] = 0;
$tdatarevenue_by_location[".recsPerRowPrint"] = 1;
$tdatarevenue_by_location[".mainTableOwnerID"] = "";
$tdatarevenue_by_location[".moveNext"] = 1;
$tdatarevenue_by_location[".entityType"] = 2;

$tdatarevenue_by_location[".strOriginalTableName"] = "billing";

	



$tdatarevenue_by_location[".showAddInPopup"] = false;

$tdatarevenue_by_location[".showEditInPopup"] = false;

$tdatarevenue_by_location[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarevenue_by_location[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarevenue_by_location[".fieldsForRegister"] = array();

$tdatarevenue_by_location[".listAjax"] = false;

	$tdatarevenue_by_location[".audit"] = false;

	$tdatarevenue_by_location[".locking"] = false;


$tdatarevenue_by_location[".add"] = true;
$tdatarevenue_by_location[".afterAddAction"] = 1;
$tdatarevenue_by_location[".closePopupAfterAdd"] = 1;
$tdatarevenue_by_location[".afterAddActionDetTable"] = "";

$tdatarevenue_by_location[".list"] = true;



$tdatarevenue_by_location[".reorderRecordsByHeader"] = true;


$tdatarevenue_by_location[".exportFormatting"] = 2;
$tdatarevenue_by_location[".exportDelimiter"] = ",";
		


$tdatarevenue_by_location[".exportTo"] = true;

$tdatarevenue_by_location[".printFriendly"] = true;


$tdatarevenue_by_location[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatarevenue_by_location[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatarevenue_by_location[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatarevenue_by_location[".searchSaving"] = false;
//

$tdatarevenue_by_location[".showSearchPanel"] = true;
		$tdatarevenue_by_location[".flexibleSearch"] = true;

$tdatarevenue_by_location[".isUseAjaxSuggest"] = true;






$tdatarevenue_by_location[".ajaxCodeSnippetAdded"] = false;

$tdatarevenue_by_location[".buttonsAdded"] = false;

$tdatarevenue_by_location[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarevenue_by_location[".isUseTimeForSearch"] = false;





$tdatarevenue_by_location[".allSearchFields"] = array();
$tdatarevenue_by_location[".filterFields"] = array();
$tdatarevenue_by_location[".requiredSearchFields"] = array();

$tdatarevenue_by_location[".allSearchFields"][] = "Location_ID";
	$tdatarevenue_by_location[".allSearchFields"][] = "Revenue By Location";
	

$tdatarevenue_by_location[".googleLikeFields"] = array();
$tdatarevenue_by_location[".googleLikeFields"][] = "Location_ID";
$tdatarevenue_by_location[".googleLikeFields"][] = "Revenue By Location";


$tdatarevenue_by_location[".advSearchFields"] = array();
$tdatarevenue_by_location[".advSearchFields"][] = "Location_ID";
$tdatarevenue_by_location[".advSearchFields"][] = "Revenue By Location";

$tdatarevenue_by_location[".tableType"] = "report";

$tdatarevenue_by_location[".printerPageOrientation"] = 0;
$tdatarevenue_by_location[".nPrinterPageScale"] = 100;

$tdatarevenue_by_location[".nPrinterSplitRecords"] = 40;

$tdatarevenue_by_location[".nPrinterPDFSplitRecords"] = 40;



$tdatarevenue_by_location[".geocodingEnabled"] = false;

//report settings
$tdatarevenue_by_location[".printReportLayout"] = 2;

$tdatarevenue_by_location[".reportPrintPartitionType"] = 1;
$tdatarevenue_by_location[".reportPrintGroupsPerPage"] = 3;
$tdatarevenue_by_location[".reportPrintPDFGroupsPerPage"] = 3;
$tdatarevenue_by_location[".lowGroup"] = 2;



$tdatarevenue_by_location[".reportGroupFields"] = true;
$tdatarevenue_by_location[".pageSize"] = 5;
$tdatarevenue_by_location[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "Location_ID";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "Revenue By Location";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdatarevenue_by_location[".reportGroupFieldsData"] = $reportGroupFields;






$tdatarevenue_by_location[".repShowDet"] = true;

$tdatarevenue_by_location[".reportLayout"] = 2;

//end of report settings




$tdatarevenue_by_location[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarevenue_by_location[".strOrderBy"] = $tstrOrderBy;

$tdatarevenue_by_location[".orderindexes"] = array();

$tdatarevenue_by_location[".sqlHead"] = "SELECT loc.Location_ID, SUM(TotalAmount) AS 'Revenue By Location'";
$tdatarevenue_by_location[".sqlFrom"] = "FROM Billing AS bill  INNER JOIN Location AS loc  ON bill.Location_ID = loc.Location_ID";
$tdatarevenue_by_location[".sqlWhereExpr"] = "BillStatus != 'Refunded'";
$tdatarevenue_by_location[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarevenue_by_location[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarevenue_by_location[".arrGroupsPerPage"] = $arrGPP;

$tdatarevenue_by_location[".highlightSearchResults"] = true;

$tableKeysrevenue_by_location = array();
$tdatarevenue_by_location[".Keys"] = $tableKeysrevenue_by_location;

$tdatarevenue_by_location[".listFields"] = array();
$tdatarevenue_by_location[".listFields"][] = "Location_ID";
$tdatarevenue_by_location[".listFields"][] = "Revenue By Location";

$tdatarevenue_by_location[".hideMobileList"] = array();


$tdatarevenue_by_location[".viewFields"] = array();
$tdatarevenue_by_location[".viewFields"][] = "Location_ID";
$tdatarevenue_by_location[".viewFields"][] = "Revenue By Location";

$tdatarevenue_by_location[".addFields"] = array();
$tdatarevenue_by_location[".addFields"][] = "Location_ID";

$tdatarevenue_by_location[".masterListFields"] = array();
$tdatarevenue_by_location[".masterListFields"][] = "Location_ID";
$tdatarevenue_by_location[".masterListFields"][] = "Revenue By Location";

$tdatarevenue_by_location[".inlineAddFields"] = array();
$tdatarevenue_by_location[".inlineAddFields"][] = "Location_ID";

$tdatarevenue_by_location[".editFields"] = array();
$tdatarevenue_by_location[".editFields"][] = "Location_ID";

$tdatarevenue_by_location[".inlineEditFields"] = array();
$tdatarevenue_by_location[".inlineEditFields"][] = "Location_ID";

$tdatarevenue_by_location[".updateSelectedFields"] = array();
$tdatarevenue_by_location[".updateSelectedFields"][] = "Location_ID";


$tdatarevenue_by_location[".exportFields"] = array();
$tdatarevenue_by_location[".exportFields"][] = "Location_ID";
$tdatarevenue_by_location[".exportFields"][] = "Revenue By Location";

$tdatarevenue_by_location[".importFields"] = array();
$tdatarevenue_by_location[".importFields"][] = "Location_ID";
$tdatarevenue_by_location[".importFields"][] = "Revenue By Location";

$tdatarevenue_by_location[".printFields"] = array();
$tdatarevenue_by_location[".printFields"][] = "Location_ID";
$tdatarevenue_by_location[".printFields"][] = "Revenue By Location";


//	Location_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Location_ID";
	$fdata["GoodName"] = "Location_ID";
	$fdata["ownerTable"] = "location";
	$fdata["Label"] = GetFieldLabel("revenue_by_location","Location_ID");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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
	$fdata["FullName"] = "loc.Location_ID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "location";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Location_ID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Location_ID";
	
	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarevenue_by_location["Location_ID"] = $fdata;
//	Revenue By Location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Revenue By Location";
	$fdata["GoodName"] = "Revenue_By_Location";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("revenue_by_location","Revenue_By_Location");
	$fdata["FieldType"] = 14;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Revenue By Location";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(TotalAmount)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarevenue_by_location["Revenue By Location"] = $fdata;


$tables_data["revenue_by_location"]=&$tdatarevenue_by_location;
$field_labels["revenue_by_location"] = &$fieldLabelsrevenue_by_location;
$fieldToolTips["revenue_by_location"] = &$fieldToolTipsrevenue_by_location;
$placeHolders["revenue_by_location"] = &$placeHoldersrevenue_by_location;
$page_titles["revenue_by_location"] = &$pageTitlesrevenue_by_location;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["revenue_by_location"] = array();
//	booking
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="booking";
		$detailsParam["dOriginalTable"] = "booking";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "booking";
	$detailsParam["dCaptionTable"] = GetTableCaption("booking");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["revenue_by_location"][$dIndex] = $detailsParam;

	
		$detailsTablesData["revenue_by_location"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["revenue_by_location"][$dIndex]["masterKeys"][]="Bill_ID";

				$detailsTablesData["revenue_by_location"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["revenue_by_location"][$dIndex]["detailKeys"][]="Bill_ID";
//	payment
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="payment";
		$detailsParam["dOriginalTable"] = "payment";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payment";
	$detailsParam["dCaptionTable"] = GetTableCaption("payment");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["revenue_by_location"][$dIndex] = $detailsParam;

	
		$detailsTablesData["revenue_by_location"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["revenue_by_location"][$dIndex]["masterKeys"][]="Bill_ID";

				$detailsTablesData["revenue_by_location"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["revenue_by_location"][$dIndex]["detailKeys"][]="Bill_ID";

// tables which are master tables for current table (detail)
$masterTablesData["revenue_by_location"] = array();


	
				$strOriginalDetailsTable="customer";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="customer";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "customer";
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
					$masterTablesData["revenue_by_location"][0] = $masterParams;
				$masterTablesData["revenue_by_location"][0]["masterKeys"] = array();
	$masterTablesData["revenue_by_location"][0]["masterKeys"][]="Cust_ID";
				$masterTablesData["revenue_by_location"][0]["detailKeys"] = array();
	$masterTablesData["revenue_by_location"][0]["detailKeys"][]="Cust_ID";
		
	
				$strOriginalDetailsTable="discount";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="discount";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "discount";
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
					$masterTablesData["revenue_by_location"][1] = $masterParams;
				$masterTablesData["revenue_by_location"][1]["masterKeys"] = array();
	$masterTablesData["revenue_by_location"][1]["masterKeys"][]="Discount_ID";
				$masterTablesData["revenue_by_location"][1]["detailKeys"] = array();
	$masterTablesData["revenue_by_location"][1]["detailKeys"][]="Discount_ID";
		
	
				$strOriginalDetailsTable="location";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="location";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "location";
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
					$masterTablesData["revenue_by_location"][2] = $masterParams;
				$masterTablesData["revenue_by_location"][2]["masterKeys"] = array();
	$masterTablesData["revenue_by_location"][2]["masterKeys"][]="Location_ID";
				$masterTablesData["revenue_by_location"][2]["detailKeys"] = array();
	$masterTablesData["revenue_by_location"][2]["detailKeys"][]="Location_ID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_revenue_by_location()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "loc.Location_ID, SUM(TotalAmount) AS 'Revenue By Location'";
$proto0["m_strFrom"] = "FROM Billing AS bill  INNER JOIN Location AS loc  ON bill.Location_ID = loc.Location_ID";
$proto0["m_strWhere"] = "BillStatus != 'Refunded'";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "BillStatus != 'Refunded'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "BillStatus",
	"m_strTable" => "bill",
	"m_srcTableName" => "revenue_by_location"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "!= 'Refunded'";
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
	"m_strTable" => "loc",
	"m_srcTableName" => "revenue_by_location"
));

$proto6["m_sql"] = "loc.Location_ID";
$proto6["m_srcTableName"] = "revenue_by_location";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_SUM";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "TotalAmount",
	"m_strTable" => "bill",
	"m_srcTableName" => "revenue_by_location"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "SUM(TotalAmount)";
$proto8["m_srcTableName"] = "revenue_by_location";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Revenue By Location";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "billing";
$proto12["m_srcTableName"] = "revenue_by_location";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "Bill_ID";
$proto12["m_columns"][] = "TotalAmount";
$proto12["m_columns"][] = "BillDate";
$proto12["m_columns"][] = "BillStatus";
$proto12["m_columns"][] = "AmountTax";
$proto12["m_columns"][] = "AmountBalance";
$proto12["m_columns"][] = "AmountAdvance";
$proto12["m_columns"][] = "Discount_ID";
$proto12["m_columns"][] = "Cust_ID";
$proto12["m_columns"][] = "Location_ID";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "Billing AS bill";
$proto11["m_alias"] = "bill";
$proto11["m_srcTableName"] = "revenue_by_location";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
												$proto15=array();
$proto15["m_link"] = "SQLL_INNERJOIN";
			$proto16=array();
$proto16["m_strName"] = "location";
$proto16["m_srcTableName"] = "revenue_by_location";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "Location_ID";
$proto16["m_columns"][] = "PhoneNum";
$proto16["m_columns"][] = "Address_ID";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "INNER JOIN Location AS loc  ON bill.Location_ID = loc.Location_ID";
$proto15["m_alias"] = "loc";
$proto15["m_srcTableName"] = "revenue_by_location";
$proto17=array();
$proto17["m_sql"] = "bill.Location_ID = loc.Location_ID";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Location_ID",
	"m_strTable" => "bill",
	"m_srcTableName" => "revenue_by_location"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "= loc.Location_ID";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "Location_ID",
	"m_strTable" => "loc",
	"m_srcTableName" => "revenue_by_location"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="revenue_by_location";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_revenue_by_location = createSqlQuery_revenue_by_location();


	
		;

		

$tdatarevenue_by_location[".sqlquery"] = $queryData_revenue_by_location;

$tableEvents["revenue_by_location"] = new eventsBase;
$tdatarevenue_by_location[".hasEvents"] = false;

?>