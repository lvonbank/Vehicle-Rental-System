<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadiscount = array();
	$tdatadiscount[".truncateText"] = true;
	$tdatadiscount[".NumberOfChars"] = 80;
	$tdatadiscount[".ShortName"] = "discount";
	$tdatadiscount[".OwnerID"] = "";
	$tdatadiscount[".OriginalTable"] = "discount";

//	field labels
$fieldLabelsdiscount = array();
$fieldToolTipsdiscount = array();
$pageTitlesdiscount = array();
$placeHoldersdiscount = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdiscount["English"] = array();
	$fieldToolTipsdiscount["English"] = array();
	$placeHoldersdiscount["English"] = array();
	$pageTitlesdiscount["English"] = array();
	$fieldLabelsdiscount["English"]["Discount_ID"] = "Discount ID";
	$fieldToolTipsdiscount["English"]["Discount_ID"] = "";
	$placeHoldersdiscount["English"]["Discount_ID"] = "";
	$fieldLabelsdiscount["English"]["Discount"] = "Discount";
	$fieldToolTipsdiscount["English"]["Discount"] = "";
	$placeHoldersdiscount["English"]["Discount"] = "";
	if (count($fieldToolTipsdiscount["English"]))
		$tdatadiscount[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdiscount[""] = array();
	$fieldToolTipsdiscount[""] = array();
	$placeHoldersdiscount[""] = array();
	$pageTitlesdiscount[""] = array();
	if (count($fieldToolTipsdiscount[""]))
		$tdatadiscount[".isUseToolTips"] = true;
}


	$tdatadiscount[".NCSearch"] = true;



$tdatadiscount[".shortTableName"] = "discount";
$tdatadiscount[".nSecOptions"] = 0;
$tdatadiscount[".recsPerRowPrint"] = 1;
$tdatadiscount[".mainTableOwnerID"] = "";
$tdatadiscount[".moveNext"] = 1;
$tdatadiscount[".entityType"] = 0;

$tdatadiscount[".strOriginalTableName"] = "discount";

	



$tdatadiscount[".showAddInPopup"] = false;

$tdatadiscount[".showEditInPopup"] = false;

$tdatadiscount[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadiscount[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadiscount[".fieldsForRegister"] = array();

$tdatadiscount[".listAjax"] = false;

	$tdatadiscount[".audit"] = false;

	$tdatadiscount[".locking"] = false;

$tdatadiscount[".edit"] = true;
$tdatadiscount[".afterEditAction"] = 1;
$tdatadiscount[".closePopupAfterEdit"] = 1;
$tdatadiscount[".afterEditActionDetTable"] = "";

$tdatadiscount[".add"] = true;
$tdatadiscount[".afterAddAction"] = 1;
$tdatadiscount[".closePopupAfterAdd"] = 1;
$tdatadiscount[".afterAddActionDetTable"] = "";

$tdatadiscount[".list"] = true;



$tdatadiscount[".reorderRecordsByHeader"] = true;


$tdatadiscount[".exportFormatting"] = 2;
$tdatadiscount[".exportDelimiter"] = ",";
		
$tdatadiscount[".view"] = true;

$tdatadiscount[".import"] = true;

$tdatadiscount[".exportTo"] = true;

$tdatadiscount[".printFriendly"] = true;

$tdatadiscount[".delete"] = true;

$tdatadiscount[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadiscount[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadiscount[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadiscount[".searchSaving"] = false;
//

$tdatadiscount[".showSearchPanel"] = true;
		$tdatadiscount[".flexibleSearch"] = true;

$tdatadiscount[".isUseAjaxSuggest"] = true;

$tdatadiscount[".rowHighlite"] = true;





$tdatadiscount[".ajaxCodeSnippetAdded"] = false;

$tdatadiscount[".buttonsAdded"] = false;

$tdatadiscount[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadiscount[".isUseTimeForSearch"] = false;



$tdatadiscount[".badgeColor"] = "4682B4";


$tdatadiscount[".allSearchFields"] = array();
$tdatadiscount[".filterFields"] = array();
$tdatadiscount[".requiredSearchFields"] = array();

$tdatadiscount[".allSearchFields"][] = "Discount_ID";
	$tdatadiscount[".allSearchFields"][] = "Discount";
	

$tdatadiscount[".googleLikeFields"] = array();
$tdatadiscount[".googleLikeFields"][] = "Discount_ID";
$tdatadiscount[".googleLikeFields"][] = "Discount";


$tdatadiscount[".advSearchFields"] = array();
$tdatadiscount[".advSearchFields"][] = "Discount_ID";
$tdatadiscount[".advSearchFields"][] = "Discount";

$tdatadiscount[".tableType"] = "list";

$tdatadiscount[".printerPageOrientation"] = 0;
$tdatadiscount[".nPrinterPageScale"] = 100;

$tdatadiscount[".nPrinterSplitRecords"] = 40;

$tdatadiscount[".nPrinterPDFSplitRecords"] = 40;



$tdatadiscount[".geocodingEnabled"] = false;





$tdatadiscount[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadiscount[".pageSize"] = 20;

$tdatadiscount[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadiscount[".strOrderBy"] = $tstrOrderBy;

$tdatadiscount[".orderindexes"] = array();

$tdatadiscount[".sqlHead"] = "SELECT Discount_ID,  	Discount";
$tdatadiscount[".sqlFrom"] = "FROM discount";
$tdatadiscount[".sqlWhereExpr"] = "";
$tdatadiscount[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadiscount[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadiscount[".arrGroupsPerPage"] = $arrGPP;

$tdatadiscount[".highlightSearchResults"] = true;

$tableKeysdiscount = array();
$tableKeysdiscount[] = "Discount_ID";
$tdatadiscount[".Keys"] = $tableKeysdiscount;

$tdatadiscount[".listFields"] = array();
$tdatadiscount[".listFields"][] = "Discount_ID";
$tdatadiscount[".listFields"][] = "Discount";

$tdatadiscount[".hideMobileList"] = array();


$tdatadiscount[".viewFields"] = array();
$tdatadiscount[".viewFields"][] = "Discount_ID";
$tdatadiscount[".viewFields"][] = "Discount";

$tdatadiscount[".addFields"] = array();
$tdatadiscount[".addFields"][] = "Discount_ID";
$tdatadiscount[".addFields"][] = "Discount";

$tdatadiscount[".masterListFields"] = array();
$tdatadiscount[".masterListFields"][] = "Discount_ID";
$tdatadiscount[".masterListFields"][] = "Discount";

$tdatadiscount[".inlineAddFields"] = array();
$tdatadiscount[".inlineAddFields"][] = "Discount_ID";
$tdatadiscount[".inlineAddFields"][] = "Discount";

$tdatadiscount[".editFields"] = array();
$tdatadiscount[".editFields"][] = "Discount_ID";
$tdatadiscount[".editFields"][] = "Discount";

$tdatadiscount[".inlineEditFields"] = array();
$tdatadiscount[".inlineEditFields"][] = "Discount_ID";
$tdatadiscount[".inlineEditFields"][] = "Discount";

$tdatadiscount[".updateSelectedFields"] = array();
$tdatadiscount[".updateSelectedFields"][] = "Discount_ID";
$tdatadiscount[".updateSelectedFields"][] = "Discount";


$tdatadiscount[".exportFields"] = array();
$tdatadiscount[".exportFields"][] = "Discount_ID";
$tdatadiscount[".exportFields"][] = "Discount";

$tdatadiscount[".importFields"] = array();
$tdatadiscount[".importFields"][] = "Discount_ID";
$tdatadiscount[".importFields"][] = "Discount";

$tdatadiscount[".printFields"] = array();
$tdatadiscount[".printFields"][] = "Discount_ID";
$tdatadiscount[".printFields"][] = "Discount";


//	Discount_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Discount_ID";
	$fdata["GoodName"] = "Discount_ID";
	$fdata["ownerTable"] = "discount";
	$fdata["Label"] = GetFieldLabel("discount","Discount_ID");
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

		$fdata["strField"] = "Discount_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Discount_ID";

	
	
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




	$tdatadiscount["Discount_ID"] = $fdata;
//	Discount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Discount";
	$fdata["GoodName"] = "Discount";
	$fdata["ownerTable"] = "discount";
	$fdata["Label"] = GetFieldLabel("discount","Discount");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "Discount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Discount";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadiscount["Discount"] = $fdata;


$tables_data["discount"]=&$tdatadiscount;
$field_labels["discount"] = &$fieldLabelsdiscount;
$fieldToolTips["discount"] = &$fieldToolTipsdiscount;
$placeHolders["discount"] = &$placeHoldersdiscount;
$page_titles["discount"] = &$pageTitlesdiscount;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["discount"] = array();
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
		
	$detailsTablesData["discount"][$dIndex] = $detailsParam;

	
		$detailsTablesData["discount"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["discount"][$dIndex]["masterKeys"][]="Discount_ID";

				$detailsTablesData["discount"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["discount"][$dIndex]["detailKeys"][]="Discount_ID";
//	customer
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="customer";
		$detailsParam["dOriginalTable"] = "customer";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "customer";
	$detailsParam["dCaptionTable"] = GetTableCaption("customer");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["discount"][$dIndex] = $detailsParam;

	
		$detailsTablesData["discount"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["discount"][$dIndex]["masterKeys"][]="Discount_ID";

				$detailsTablesData["discount"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["discount"][$dIndex]["detailKeys"][]="Discount_ID";
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
		
	$detailsTablesData["discount"][$dIndex] = $detailsParam;

	
		$detailsTablesData["discount"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["discount"][$dIndex]["masterKeys"][]="Discount_ID";

				$detailsTablesData["discount"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["discount"][$dIndex]["detailKeys"][]="Discount_ID";

// tables which are master tables for current table (detail)
$masterTablesData["discount"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_discount()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Discount_ID,  	Discount";
$proto0["m_strFrom"] = "FROM discount";
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
	"m_strName" => "Discount_ID",
	"m_strTable" => "discount",
	"m_srcTableName" => "discount"
));

$proto6["m_sql"] = "Discount_ID";
$proto6["m_srcTableName"] = "discount";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Discount",
	"m_strTable" => "discount",
	"m_srcTableName" => "discount"
));

$proto8["m_sql"] = "Discount";
$proto8["m_srcTableName"] = "discount";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "discount";
$proto11["m_srcTableName"] = "discount";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Discount_ID";
$proto11["m_columns"][] = "Discount";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "discount";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "discount";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="discount";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_discount = createSqlQuery_discount();


	
		;

		

$tdatadiscount[".sqlquery"] = $queryData_discount;

$tableEvents["discount"] = new eventsBase;
$tdatadiscount[".hasEvents"] = false;

?>