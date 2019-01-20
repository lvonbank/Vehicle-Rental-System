<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainstock = array();
	$tdatainstock[".truncateText"] = true;
	$tdatainstock[".NumberOfChars"] = 80;
	$tdatainstock[".ShortName"] = "instock";
	$tdatainstock[".OwnerID"] = "";
	$tdatainstock[".OriginalTable"] = "instock";

//	field labels
$fieldLabelsinstock = array();
$fieldToolTipsinstock = array();
$pageTitlesinstock = array();
$placeHoldersinstock = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinstock["English"] = array();
	$fieldToolTipsinstock["English"] = array();
	$placeHoldersinstock["English"] = array();
	$pageTitlesinstock["English"] = array();
	$fieldLabelsinstock["English"]["VIN"] = "VIN";
	$fieldToolTipsinstock["English"]["VIN"] = "";
	$placeHoldersinstock["English"]["VIN"] = "";
	$fieldLabelsinstock["English"]["Location_ID"] = "Location ID";
	$fieldToolTipsinstock["English"]["Location_ID"] = "";
	$placeHoldersinstock["English"]["Location_ID"] = "";
	$fieldLabelsinstock["English"]["Avalible"] = "Avalible";
	$fieldToolTipsinstock["English"]["Avalible"] = "";
	$placeHoldersinstock["English"]["Avalible"] = "";
	if (count($fieldToolTipsinstock["English"]))
		$tdatainstock[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinstock[""] = array();
	$fieldToolTipsinstock[""] = array();
	$placeHoldersinstock[""] = array();
	$pageTitlesinstock[""] = array();
	if (count($fieldToolTipsinstock[""]))
		$tdatainstock[".isUseToolTips"] = true;
}


	$tdatainstock[".NCSearch"] = true;



$tdatainstock[".shortTableName"] = "instock";
$tdatainstock[".nSecOptions"] = 0;
$tdatainstock[".recsPerRowPrint"] = 1;
$tdatainstock[".mainTableOwnerID"] = "";
$tdatainstock[".moveNext"] = 1;
$tdatainstock[".entityType"] = 0;

$tdatainstock[".strOriginalTableName"] = "instock";

	



$tdatainstock[".showAddInPopup"] = false;

$tdatainstock[".showEditInPopup"] = false;

$tdatainstock[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainstock[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainstock[".fieldsForRegister"] = array();

$tdatainstock[".listAjax"] = false;

	$tdatainstock[".audit"] = false;

	$tdatainstock[".locking"] = false;

$tdatainstock[".edit"] = true;
$tdatainstock[".afterEditAction"] = 1;
$tdatainstock[".closePopupAfterEdit"] = 1;
$tdatainstock[".afterEditActionDetTable"] = "";

$tdatainstock[".add"] = true;
$tdatainstock[".afterAddAction"] = 1;
$tdatainstock[".closePopupAfterAdd"] = 1;
$tdatainstock[".afterAddActionDetTable"] = "";

$tdatainstock[".list"] = true;



$tdatainstock[".reorderRecordsByHeader"] = true;


$tdatainstock[".exportFormatting"] = 2;
$tdatainstock[".exportDelimiter"] = ",";
		
$tdatainstock[".view"] = true;

$tdatainstock[".import"] = true;

$tdatainstock[".exportTo"] = true;

$tdatainstock[".printFriendly"] = true;

$tdatainstock[".delete"] = true;

$tdatainstock[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatainstock[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatainstock[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatainstock[".searchSaving"] = false;
//

$tdatainstock[".showSearchPanel"] = true;
		$tdatainstock[".flexibleSearch"] = true;

$tdatainstock[".isUseAjaxSuggest"] = true;

$tdatainstock[".rowHighlite"] = true;





$tdatainstock[".ajaxCodeSnippetAdded"] = false;

$tdatainstock[".buttonsAdded"] = false;

$tdatainstock[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainstock[".isUseTimeForSearch"] = false;





$tdatainstock[".allSearchFields"] = array();
$tdatainstock[".filterFields"] = array();
$tdatainstock[".requiredSearchFields"] = array();

$tdatainstock[".allSearchFields"][] = "VIN";
	$tdatainstock[".allSearchFields"][] = "Location_ID";
	$tdatainstock[".allSearchFields"][] = "Avalible";
	

$tdatainstock[".googleLikeFields"] = array();
$tdatainstock[".googleLikeFields"][] = "VIN";
$tdatainstock[".googleLikeFields"][] = "Location_ID";
$tdatainstock[".googleLikeFields"][] = "Avalible";


$tdatainstock[".advSearchFields"] = array();
$tdatainstock[".advSearchFields"][] = "VIN";
$tdatainstock[".advSearchFields"][] = "Location_ID";
$tdatainstock[".advSearchFields"][] = "Avalible";

$tdatainstock[".tableType"] = "list";

$tdatainstock[".printerPageOrientation"] = 0;
$tdatainstock[".nPrinterPageScale"] = 100;

$tdatainstock[".nPrinterSplitRecords"] = 40;

$tdatainstock[".nPrinterPDFSplitRecords"] = 40;



$tdatainstock[".geocodingEnabled"] = false;





$tdatainstock[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatainstock[".pageSize"] = 20;

$tdatainstock[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainstock[".strOrderBy"] = $tstrOrderBy;

$tdatainstock[".orderindexes"] = array();

$tdatainstock[".sqlHead"] = "SELECT VIN,  	Location_ID,  	Avalible";
$tdatainstock[".sqlFrom"] = "FROM instock";
$tdatainstock[".sqlWhereExpr"] = "";
$tdatainstock[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainstock[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainstock[".arrGroupsPerPage"] = $arrGPP;

$tdatainstock[".highlightSearchResults"] = true;

$tableKeysinstock = array();
$tableKeysinstock[] = "VIN";
$tableKeysinstock[] = "Location_ID";
$tdatainstock[".Keys"] = $tableKeysinstock;

$tdatainstock[".listFields"] = array();
$tdatainstock[".listFields"][] = "VIN";
$tdatainstock[".listFields"][] = "Location_ID";
$tdatainstock[".listFields"][] = "Avalible";

$tdatainstock[".hideMobileList"] = array();


$tdatainstock[".viewFields"] = array();
$tdatainstock[".viewFields"][] = "VIN";
$tdatainstock[".viewFields"][] = "Location_ID";
$tdatainstock[".viewFields"][] = "Avalible";

$tdatainstock[".addFields"] = array();
$tdatainstock[".addFields"][] = "VIN";
$tdatainstock[".addFields"][] = "Location_ID";
$tdatainstock[".addFields"][] = "Avalible";

$tdatainstock[".masterListFields"] = array();
$tdatainstock[".masterListFields"][] = "VIN";
$tdatainstock[".masterListFields"][] = "Location_ID";
$tdatainstock[".masterListFields"][] = "Avalible";

$tdatainstock[".inlineAddFields"] = array();
$tdatainstock[".inlineAddFields"][] = "VIN";
$tdatainstock[".inlineAddFields"][] = "Location_ID";
$tdatainstock[".inlineAddFields"][] = "Avalible";

$tdatainstock[".editFields"] = array();
$tdatainstock[".editFields"][] = "VIN";
$tdatainstock[".editFields"][] = "Location_ID";
$tdatainstock[".editFields"][] = "Avalible";

$tdatainstock[".inlineEditFields"] = array();
$tdatainstock[".inlineEditFields"][] = "VIN";
$tdatainstock[".inlineEditFields"][] = "Location_ID";
$tdatainstock[".inlineEditFields"][] = "Avalible";

$tdatainstock[".updateSelectedFields"] = array();
$tdatainstock[".updateSelectedFields"][] = "VIN";
$tdatainstock[".updateSelectedFields"][] = "Location_ID";
$tdatainstock[".updateSelectedFields"][] = "Avalible";


$tdatainstock[".exportFields"] = array();
$tdatainstock[".exportFields"][] = "VIN";
$tdatainstock[".exportFields"][] = "Location_ID";
$tdatainstock[".exportFields"][] = "Avalible";

$tdatainstock[".importFields"] = array();
$tdatainstock[".importFields"][] = "VIN";
$tdatainstock[".importFields"][] = "Location_ID";
$tdatainstock[".importFields"][] = "Avalible";

$tdatainstock[".printFields"] = array();
$tdatainstock[".printFields"][] = "VIN";
$tdatainstock[".printFields"][] = "Location_ID";
$tdatainstock[".printFields"][] = "Avalible";


//	VIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VIN";
	$fdata["GoodName"] = "VIN";
	$fdata["ownerTable"] = "instock";
	$fdata["Label"] = GetFieldLabel("instock","VIN");
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

		$fdata["strField"] = "VIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VIN";

	
	
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
	$edata["LookupTable"] = "vehicle";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "VIN";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "VIN";
	
	

	
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




	$tdatainstock["VIN"] = $fdata;
//	Location_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Location_ID";
	$fdata["GoodName"] = "Location_ID";
	$fdata["ownerTable"] = "instock";
	$fdata["Label"] = GetFieldLabel("instock","Location_ID");
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainstock["Location_ID"] = $fdata;
//	Avalible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Avalible";
	$fdata["GoodName"] = "Avalible";
	$fdata["ownerTable"] = "instock";
	$fdata["Label"] = GetFieldLabel("instock","Avalible");
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

		$fdata["strField"] = "Avalible";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Avalible";

	
	
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




	$tdatainstock["Avalible"] = $fdata;


$tables_data["instock"]=&$tdatainstock;
$field_labels["instock"] = &$fieldLabelsinstock;
$fieldToolTips["instock"] = &$fieldToolTipsinstock;
$placeHolders["instock"] = &$placeHoldersinstock;
$page_titles["instock"] = &$pageTitlesinstock;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["instock"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["instock"] = array();


	
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
					$masterTablesData["instock"][0] = $masterParams;
				$masterTablesData["instock"][0]["masterKeys"] = array();
	$masterTablesData["instock"][0]["masterKeys"][]="Location_ID";
				$masterTablesData["instock"][0]["detailKeys"] = array();
	$masterTablesData["instock"][0]["detailKeys"][]="Location_ID";
		
	
				$strOriginalDetailsTable="vehicle";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="vehicle";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vehicle";
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
					$masterTablesData["instock"][1] = $masterParams;
				$masterTablesData["instock"][1]["masterKeys"] = array();
	$masterTablesData["instock"][1]["masterKeys"][]="VIN";
				$masterTablesData["instock"][1]["detailKeys"] = array();
	$masterTablesData["instock"][1]["detailKeys"][]="VIN";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_instock()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "VIN,  	Location_ID,  	Avalible";
$proto0["m_strFrom"] = "FROM instock";
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
	"m_strName" => "VIN",
	"m_strTable" => "instock",
	"m_srcTableName" => "instock"
));

$proto6["m_sql"] = "VIN";
$proto6["m_srcTableName"] = "instock";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Location_ID",
	"m_strTable" => "instock",
	"m_srcTableName" => "instock"
));

$proto8["m_sql"] = "Location_ID";
$proto8["m_srcTableName"] = "instock";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Avalible",
	"m_strTable" => "instock",
	"m_srcTableName" => "instock"
));

$proto10["m_sql"] = "Avalible";
$proto10["m_srcTableName"] = "instock";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "instock";
$proto13["m_srcTableName"] = "instock";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "VIN";
$proto13["m_columns"][] = "Location_ID";
$proto13["m_columns"][] = "Avalible";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "instock";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "instock";
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
$proto0["m_srcTableName"]="instock";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_instock = createSqlQuery_instock();


	
		;

			

$tdatainstock[".sqlquery"] = $queryData_instock;

$tableEvents["instock"] = new eventsBase;
$tdatainstock[".hasEvents"] = false;

?>