<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabilling = array();
	$tdatabilling[".truncateText"] = true;
	$tdatabilling[".NumberOfChars"] = 80;
	$tdatabilling[".ShortName"] = "billing";
	$tdatabilling[".OwnerID"] = "";
	$tdatabilling[".OriginalTable"] = "billing";

//	field labels
$fieldLabelsbilling = array();
$fieldToolTipsbilling = array();
$pageTitlesbilling = array();
$placeHoldersbilling = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbilling["English"] = array();
	$fieldToolTipsbilling["English"] = array();
	$placeHoldersbilling["English"] = array();
	$pageTitlesbilling["English"] = array();
	$fieldLabelsbilling["English"]["Bill_ID"] = "Bill ID";
	$fieldToolTipsbilling["English"]["Bill_ID"] = "";
	$placeHoldersbilling["English"]["Bill_ID"] = "";
	$fieldLabelsbilling["English"]["TotalAmount"] = "Total Amount";
	$fieldToolTipsbilling["English"]["TotalAmount"] = "";
	$placeHoldersbilling["English"]["TotalAmount"] = "";
	$fieldLabelsbilling["English"]["BillDate"] = "Bill Date";
	$fieldToolTipsbilling["English"]["BillDate"] = "";
	$placeHoldersbilling["English"]["BillDate"] = "";
	$fieldLabelsbilling["English"]["BillStatus"] = "Bill Status";
	$fieldToolTipsbilling["English"]["BillStatus"] = "";
	$placeHoldersbilling["English"]["BillStatus"] = "";
	$fieldLabelsbilling["English"]["AmountTax"] = "Amount Tax";
	$fieldToolTipsbilling["English"]["AmountTax"] = "";
	$placeHoldersbilling["English"]["AmountTax"] = "";
	$fieldLabelsbilling["English"]["AmountBalance"] = "Amount Balance";
	$fieldToolTipsbilling["English"]["AmountBalance"] = "";
	$placeHoldersbilling["English"]["AmountBalance"] = "";
	$fieldLabelsbilling["English"]["AmountAdvance"] = "Amount Advance";
	$fieldToolTipsbilling["English"]["AmountAdvance"] = "";
	$placeHoldersbilling["English"]["AmountAdvance"] = "";
	$fieldLabelsbilling["English"]["Discount_ID"] = "Discount ID";
	$fieldToolTipsbilling["English"]["Discount_ID"] = "";
	$placeHoldersbilling["English"]["Discount_ID"] = "";
	$fieldLabelsbilling["English"]["Cust_ID"] = "Cust ID";
	$fieldToolTipsbilling["English"]["Cust_ID"] = "";
	$placeHoldersbilling["English"]["Cust_ID"] = "";
	$fieldLabelsbilling["English"]["Location_ID"] = "Location ID";
	$fieldToolTipsbilling["English"]["Location_ID"] = "";
	$placeHoldersbilling["English"]["Location_ID"] = "";
	if (count($fieldToolTipsbilling["English"]))
		$tdatabilling[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbilling[""] = array();
	$fieldToolTipsbilling[""] = array();
	$placeHoldersbilling[""] = array();
	$pageTitlesbilling[""] = array();
	if (count($fieldToolTipsbilling[""]))
		$tdatabilling[".isUseToolTips"] = true;
}


	$tdatabilling[".NCSearch"] = true;



$tdatabilling[".shortTableName"] = "billing";
$tdatabilling[".nSecOptions"] = 0;
$tdatabilling[".recsPerRowPrint"] = 1;
$tdatabilling[".mainTableOwnerID"] = "";
$tdatabilling[".moveNext"] = 1;
$tdatabilling[".entityType"] = 0;

$tdatabilling[".strOriginalTableName"] = "billing";

	



$tdatabilling[".showAddInPopup"] = false;

$tdatabilling[".showEditInPopup"] = false;

$tdatabilling[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabilling[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabilling[".fieldsForRegister"] = array();

$tdatabilling[".listAjax"] = false;

	$tdatabilling[".audit"] = false;

	$tdatabilling[".locking"] = false;

$tdatabilling[".edit"] = true;
$tdatabilling[".afterEditAction"] = 1;
$tdatabilling[".closePopupAfterEdit"] = 1;
$tdatabilling[".afterEditActionDetTable"] = "";

$tdatabilling[".add"] = true;
$tdatabilling[".afterAddAction"] = 1;
$tdatabilling[".closePopupAfterAdd"] = 1;
$tdatabilling[".afterAddActionDetTable"] = "";

$tdatabilling[".list"] = true;



$tdatabilling[".reorderRecordsByHeader"] = true;


$tdatabilling[".exportFormatting"] = 2;
$tdatabilling[".exportDelimiter"] = ",";
		
$tdatabilling[".view"] = true;

$tdatabilling[".import"] = true;

$tdatabilling[".exportTo"] = true;

$tdatabilling[".printFriendly"] = true;

$tdatabilling[".delete"] = true;

$tdatabilling[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabilling[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatabilling[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatabilling[".searchSaving"] = false;
//

$tdatabilling[".showSearchPanel"] = true;
		$tdatabilling[".flexibleSearch"] = true;

$tdatabilling[".isUseAjaxSuggest"] = true;

$tdatabilling[".rowHighlite"] = true;





$tdatabilling[".ajaxCodeSnippetAdded"] = false;

$tdatabilling[".buttonsAdded"] = false;

$tdatabilling[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabilling[".isUseTimeForSearch"] = false;



$tdatabilling[".badgeColor"] = "4682B4";


$tdatabilling[".allSearchFields"] = array();
$tdatabilling[".filterFields"] = array();
$tdatabilling[".requiredSearchFields"] = array();

$tdatabilling[".allSearchFields"][] = "Bill_ID";
	$tdatabilling[".allSearchFields"][] = "TotalAmount";
	$tdatabilling[".allSearchFields"][] = "BillDate";
	$tdatabilling[".allSearchFields"][] = "BillStatus";
	$tdatabilling[".allSearchFields"][] = "AmountTax";
	$tdatabilling[".allSearchFields"][] = "AmountBalance";
	$tdatabilling[".allSearchFields"][] = "AmountAdvance";
	$tdatabilling[".allSearchFields"][] = "Discount_ID";
	$tdatabilling[".allSearchFields"][] = "Cust_ID";
	$tdatabilling[".allSearchFields"][] = "Location_ID";
	

$tdatabilling[".googleLikeFields"] = array();
$tdatabilling[".googleLikeFields"][] = "Bill_ID";
$tdatabilling[".googleLikeFields"][] = "TotalAmount";
$tdatabilling[".googleLikeFields"][] = "BillDate";
$tdatabilling[".googleLikeFields"][] = "BillStatus";
$tdatabilling[".googleLikeFields"][] = "AmountTax";
$tdatabilling[".googleLikeFields"][] = "AmountBalance";
$tdatabilling[".googleLikeFields"][] = "AmountAdvance";
$tdatabilling[".googleLikeFields"][] = "Discount_ID";
$tdatabilling[".googleLikeFields"][] = "Cust_ID";
$tdatabilling[".googleLikeFields"][] = "Location_ID";


$tdatabilling[".advSearchFields"] = array();
$tdatabilling[".advSearchFields"][] = "Bill_ID";
$tdatabilling[".advSearchFields"][] = "TotalAmount";
$tdatabilling[".advSearchFields"][] = "BillDate";
$tdatabilling[".advSearchFields"][] = "BillStatus";
$tdatabilling[".advSearchFields"][] = "AmountTax";
$tdatabilling[".advSearchFields"][] = "AmountBalance";
$tdatabilling[".advSearchFields"][] = "AmountAdvance";
$tdatabilling[".advSearchFields"][] = "Discount_ID";
$tdatabilling[".advSearchFields"][] = "Cust_ID";
$tdatabilling[".advSearchFields"][] = "Location_ID";

$tdatabilling[".tableType"] = "list";

$tdatabilling[".printerPageOrientation"] = 0;
$tdatabilling[".nPrinterPageScale"] = 100;

$tdatabilling[".nPrinterSplitRecords"] = 40;

$tdatabilling[".nPrinterPDFSplitRecords"] = 40;



$tdatabilling[".geocodingEnabled"] = false;





$tdatabilling[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabilling[".pageSize"] = 20;

$tdatabilling[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabilling[".strOrderBy"] = $tstrOrderBy;

$tdatabilling[".orderindexes"] = array();

$tdatabilling[".sqlHead"] = "SELECT Bill_ID,  	TotalAmount,  	BillDate,  	BillStatus,  	AmountTax,  	AmountBalance,  	AmountAdvance,  	Discount_ID,  	Cust_ID,  	Location_ID";
$tdatabilling[".sqlFrom"] = "FROM billing";
$tdatabilling[".sqlWhereExpr"] = "";
$tdatabilling[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabilling[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabilling[".arrGroupsPerPage"] = $arrGPP;

$tdatabilling[".highlightSearchResults"] = true;

$tableKeysbilling = array();
$tableKeysbilling[] = "Bill_ID";
$tdatabilling[".Keys"] = $tableKeysbilling;

$tdatabilling[".listFields"] = array();
$tdatabilling[".listFields"][] = "Bill_ID";
$tdatabilling[".listFields"][] = "TotalAmount";
$tdatabilling[".listFields"][] = "BillDate";
$tdatabilling[".listFields"][] = "BillStatus";
$tdatabilling[".listFields"][] = "AmountTax";
$tdatabilling[".listFields"][] = "AmountBalance";
$tdatabilling[".listFields"][] = "AmountAdvance";
$tdatabilling[".listFields"][] = "Discount_ID";
$tdatabilling[".listFields"][] = "Cust_ID";
$tdatabilling[".listFields"][] = "Location_ID";

$tdatabilling[".hideMobileList"] = array();


$tdatabilling[".viewFields"] = array();
$tdatabilling[".viewFields"][] = "Bill_ID";
$tdatabilling[".viewFields"][] = "TotalAmount";
$tdatabilling[".viewFields"][] = "BillDate";
$tdatabilling[".viewFields"][] = "BillStatus";
$tdatabilling[".viewFields"][] = "AmountTax";
$tdatabilling[".viewFields"][] = "AmountBalance";
$tdatabilling[".viewFields"][] = "AmountAdvance";
$tdatabilling[".viewFields"][] = "Discount_ID";
$tdatabilling[".viewFields"][] = "Cust_ID";
$tdatabilling[".viewFields"][] = "Location_ID";

$tdatabilling[".addFields"] = array();
$tdatabilling[".addFields"][] = "Bill_ID";
$tdatabilling[".addFields"][] = "TotalAmount";
$tdatabilling[".addFields"][] = "BillDate";
$tdatabilling[".addFields"][] = "BillStatus";
$tdatabilling[".addFields"][] = "AmountTax";
$tdatabilling[".addFields"][] = "AmountBalance";
$tdatabilling[".addFields"][] = "AmountAdvance";
$tdatabilling[".addFields"][] = "Discount_ID";
$tdatabilling[".addFields"][] = "Cust_ID";
$tdatabilling[".addFields"][] = "Location_ID";

$tdatabilling[".masterListFields"] = array();
$tdatabilling[".masterListFields"][] = "Bill_ID";
$tdatabilling[".masterListFields"][] = "TotalAmount";
$tdatabilling[".masterListFields"][] = "BillDate";
$tdatabilling[".masterListFields"][] = "BillStatus";
$tdatabilling[".masterListFields"][] = "AmountTax";
$tdatabilling[".masterListFields"][] = "AmountBalance";
$tdatabilling[".masterListFields"][] = "AmountAdvance";
$tdatabilling[".masterListFields"][] = "Discount_ID";
$tdatabilling[".masterListFields"][] = "Cust_ID";
$tdatabilling[".masterListFields"][] = "Location_ID";

$tdatabilling[".inlineAddFields"] = array();
$tdatabilling[".inlineAddFields"][] = "Bill_ID";
$tdatabilling[".inlineAddFields"][] = "TotalAmount";
$tdatabilling[".inlineAddFields"][] = "BillDate";
$tdatabilling[".inlineAddFields"][] = "BillStatus";
$tdatabilling[".inlineAddFields"][] = "AmountTax";
$tdatabilling[".inlineAddFields"][] = "AmountBalance";
$tdatabilling[".inlineAddFields"][] = "AmountAdvance";
$tdatabilling[".inlineAddFields"][] = "Discount_ID";
$tdatabilling[".inlineAddFields"][] = "Cust_ID";
$tdatabilling[".inlineAddFields"][] = "Location_ID";

$tdatabilling[".editFields"] = array();
$tdatabilling[".editFields"][] = "Bill_ID";
$tdatabilling[".editFields"][] = "TotalAmount";
$tdatabilling[".editFields"][] = "BillDate";
$tdatabilling[".editFields"][] = "BillStatus";
$tdatabilling[".editFields"][] = "AmountTax";
$tdatabilling[".editFields"][] = "AmountBalance";
$tdatabilling[".editFields"][] = "AmountAdvance";
$tdatabilling[".editFields"][] = "Discount_ID";
$tdatabilling[".editFields"][] = "Cust_ID";
$tdatabilling[".editFields"][] = "Location_ID";

$tdatabilling[".inlineEditFields"] = array();
$tdatabilling[".inlineEditFields"][] = "Bill_ID";
$tdatabilling[".inlineEditFields"][] = "TotalAmount";
$tdatabilling[".inlineEditFields"][] = "BillDate";
$tdatabilling[".inlineEditFields"][] = "BillStatus";
$tdatabilling[".inlineEditFields"][] = "AmountTax";
$tdatabilling[".inlineEditFields"][] = "AmountBalance";
$tdatabilling[".inlineEditFields"][] = "AmountAdvance";
$tdatabilling[".inlineEditFields"][] = "Discount_ID";
$tdatabilling[".inlineEditFields"][] = "Cust_ID";
$tdatabilling[".inlineEditFields"][] = "Location_ID";

$tdatabilling[".updateSelectedFields"] = array();
$tdatabilling[".updateSelectedFields"][] = "Bill_ID";
$tdatabilling[".updateSelectedFields"][] = "TotalAmount";
$tdatabilling[".updateSelectedFields"][] = "BillDate";
$tdatabilling[".updateSelectedFields"][] = "BillStatus";
$tdatabilling[".updateSelectedFields"][] = "AmountTax";
$tdatabilling[".updateSelectedFields"][] = "AmountBalance";
$tdatabilling[".updateSelectedFields"][] = "AmountAdvance";
$tdatabilling[".updateSelectedFields"][] = "Discount_ID";
$tdatabilling[".updateSelectedFields"][] = "Cust_ID";
$tdatabilling[".updateSelectedFields"][] = "Location_ID";


$tdatabilling[".exportFields"] = array();
$tdatabilling[".exportFields"][] = "Bill_ID";
$tdatabilling[".exportFields"][] = "TotalAmount";
$tdatabilling[".exportFields"][] = "BillDate";
$tdatabilling[".exportFields"][] = "BillStatus";
$tdatabilling[".exportFields"][] = "AmountTax";
$tdatabilling[".exportFields"][] = "AmountBalance";
$tdatabilling[".exportFields"][] = "AmountAdvance";
$tdatabilling[".exportFields"][] = "Discount_ID";
$tdatabilling[".exportFields"][] = "Cust_ID";
$tdatabilling[".exportFields"][] = "Location_ID";

$tdatabilling[".importFields"] = array();
$tdatabilling[".importFields"][] = "Bill_ID";
$tdatabilling[".importFields"][] = "TotalAmount";
$tdatabilling[".importFields"][] = "BillDate";
$tdatabilling[".importFields"][] = "BillStatus";
$tdatabilling[".importFields"][] = "AmountTax";
$tdatabilling[".importFields"][] = "AmountBalance";
$tdatabilling[".importFields"][] = "AmountAdvance";
$tdatabilling[".importFields"][] = "Discount_ID";
$tdatabilling[".importFields"][] = "Cust_ID";
$tdatabilling[".importFields"][] = "Location_ID";

$tdatabilling[".printFields"] = array();
$tdatabilling[".printFields"][] = "Bill_ID";
$tdatabilling[".printFields"][] = "TotalAmount";
$tdatabilling[".printFields"][] = "BillDate";
$tdatabilling[".printFields"][] = "BillStatus";
$tdatabilling[".printFields"][] = "AmountTax";
$tdatabilling[".printFields"][] = "AmountBalance";
$tdatabilling[".printFields"][] = "AmountAdvance";
$tdatabilling[".printFields"][] = "Discount_ID";
$tdatabilling[".printFields"][] = "Cust_ID";
$tdatabilling[".printFields"][] = "Location_ID";


//	Bill_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Bill_ID";
	$fdata["GoodName"] = "Bill_ID";
	$fdata["ownerTable"] = "billing";
	$fdata["Label"] = GetFieldLabel("billing","Bill_ID");
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

		$fdata["strField"] = "Bill_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bill_ID";

	
	
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




	$tdatabilling["Bill_ID"] = $fdata;
//	TotalAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TotalAmount";
	$fdata["GoodName"] = "TotalAmount";
	$fdata["ownerTable"] = "billing";
	$fdata["Label"] = GetFieldLabel("billing","TotalAmount");
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

		$fdata["strField"] = "TotalAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalAmount";

	
	
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




	$tdatabilling["TotalAmount"] = $fdata;
//	BillDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BillDate";
	$fdata["GoodName"] = "BillDate";
	$fdata["ownerTable"] = "billing";
	$fdata["Label"] = GetFieldLabel("billing","BillDate");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "BillDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatabilling["BillDate"] = $fdata;
//	BillStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "BillStatus";
	$fdata["GoodName"] = "BillStatus";
	$fdata["ownerTable"] = "billing";
	$fdata["Label"] = GetFieldLabel("billing","BillStatus");
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

		$fdata["strField"] = "BillStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillStatus";

	
	
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




	$tdatabilling["BillStatus"] = $fdata;
//	AmountTax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AmountTax";
	$fdata["GoodName"] = "AmountTax";
	$fdata["ownerTable"] = "billing";
	$fdata["Label"] = GetFieldLabel("billing","AmountTax");
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

		$fdata["strField"] = "AmountTax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AmountTax";

	
	
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




	$tdatabilling["AmountTax"] = $fdata;
//	AmountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AmountBalance";
	$fdata["GoodName"] = "AmountBalance";
	$fdata["ownerTable"] = "billing";
	$fdata["Label"] = GetFieldLabel("billing","AmountBalance");
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

		$fdata["strField"] = "AmountBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AmountBalance";

	
	
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




	$tdatabilling["AmountBalance"] = $fdata;
//	AmountAdvance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AmountAdvance";
	$fdata["GoodName"] = "AmountAdvance";
	$fdata["ownerTable"] = "billing";
	$fdata["Label"] = GetFieldLabel("billing","AmountAdvance");
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

		$fdata["strField"] = "AmountAdvance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AmountAdvance";

	
	
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




	$tdatabilling["AmountAdvance"] = $fdata;
//	Discount_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Discount_ID";
	$fdata["GoodName"] = "Discount_ID";
	$fdata["ownerTable"] = "billing";
	$fdata["Label"] = GetFieldLabel("billing","Discount_ID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "discount";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Discount_ID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Discount_ID";
	
	

	
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




	$tdatabilling["Discount_ID"] = $fdata;
//	Cust_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cust_ID";
	$fdata["GoodName"] = "Cust_ID";
	$fdata["ownerTable"] = "billing";
	$fdata["Label"] = GetFieldLabel("billing","Cust_ID");
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

		$fdata["strField"] = "Cust_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cust_ID";

	
	
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
	$edata["LookupTable"] = "customer";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Cust_ID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Cust_ID";
	
	

	
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




	$tdatabilling["Cust_ID"] = $fdata;
//	Location_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Location_ID";
	$fdata["GoodName"] = "Location_ID";
	$fdata["ownerTable"] = "billing";
	$fdata["Label"] = GetFieldLabel("billing","Location_ID");
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




	$tdatabilling["Location_ID"] = $fdata;


$tables_data["billing"]=&$tdatabilling;
$field_labels["billing"] = &$fieldLabelsbilling;
$fieldToolTips["billing"] = &$fieldToolTipsbilling;
$placeHolders["billing"] = &$placeHoldersbilling;
$page_titles["billing"] = &$pageTitlesbilling;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["billing"] = array();
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
		
	$detailsTablesData["billing"][$dIndex] = $detailsParam;

	
		$detailsTablesData["billing"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["billing"][$dIndex]["masterKeys"][]="Bill_ID";

				$detailsTablesData["billing"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["billing"][$dIndex]["detailKeys"][]="Bill_ID";
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
		
	$detailsTablesData["billing"][$dIndex] = $detailsParam;

	
		$detailsTablesData["billing"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["billing"][$dIndex]["masterKeys"][]="Bill_ID";

				$detailsTablesData["billing"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["billing"][$dIndex]["detailKeys"][]="Bill_ID";

// tables which are master tables for current table (detail)
$masterTablesData["billing"] = array();


	
				$strOriginalDetailsTable="customer";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="customer";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "customer";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["billing"][0] = $masterParams;
				$masterTablesData["billing"][0]["masterKeys"] = array();
	$masterTablesData["billing"][0]["masterKeys"][]="Cust_ID";
				$masterTablesData["billing"][0]["detailKeys"] = array();
	$masterTablesData["billing"][0]["detailKeys"][]="Cust_ID";
		
	
				$strOriginalDetailsTable="discount";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="discount";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "discount";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["billing"][1] = $masterParams;
				$masterTablesData["billing"][1]["masterKeys"] = array();
	$masterTablesData["billing"][1]["masterKeys"][]="Discount_ID";
				$masterTablesData["billing"][1]["detailKeys"] = array();
	$masterTablesData["billing"][1]["detailKeys"][]="Discount_ID";
		
	
				$strOriginalDetailsTable="location";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="location";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "location";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["billing"][2] = $masterParams;
				$masterTablesData["billing"][2]["masterKeys"] = array();
	$masterTablesData["billing"][2]["masterKeys"][]="Location_ID";
				$masterTablesData["billing"][2]["detailKeys"] = array();
	$masterTablesData["billing"][2]["detailKeys"][]="Location_ID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_billing()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Bill_ID,  	TotalAmount,  	BillDate,  	BillStatus,  	AmountTax,  	AmountBalance,  	AmountAdvance,  	Discount_ID,  	Cust_ID,  	Location_ID";
$proto0["m_strFrom"] = "FROM billing";
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
	"m_strName" => "Bill_ID",
	"m_strTable" => "billing",
	"m_srcTableName" => "billing"
));

$proto6["m_sql"] = "Bill_ID";
$proto6["m_srcTableName"] = "billing";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalAmount",
	"m_strTable" => "billing",
	"m_srcTableName" => "billing"
));

$proto8["m_sql"] = "TotalAmount";
$proto8["m_srcTableName"] = "billing";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BillDate",
	"m_strTable" => "billing",
	"m_srcTableName" => "billing"
));

$proto10["m_sql"] = "BillDate";
$proto10["m_srcTableName"] = "billing";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "BillStatus",
	"m_strTable" => "billing",
	"m_srcTableName" => "billing"
));

$proto12["m_sql"] = "BillStatus";
$proto12["m_srcTableName"] = "billing";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AmountTax",
	"m_strTable" => "billing",
	"m_srcTableName" => "billing"
));

$proto14["m_sql"] = "AmountTax";
$proto14["m_srcTableName"] = "billing";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AmountBalance",
	"m_strTable" => "billing",
	"m_srcTableName" => "billing"
));

$proto16["m_sql"] = "AmountBalance";
$proto16["m_srcTableName"] = "billing";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AmountAdvance",
	"m_strTable" => "billing",
	"m_srcTableName" => "billing"
));

$proto18["m_sql"] = "AmountAdvance";
$proto18["m_srcTableName"] = "billing";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Discount_ID",
	"m_strTable" => "billing",
	"m_srcTableName" => "billing"
));

$proto20["m_sql"] = "Discount_ID";
$proto20["m_srcTableName"] = "billing";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cust_ID",
	"m_strTable" => "billing",
	"m_srcTableName" => "billing"
));

$proto22["m_sql"] = "Cust_ID";
$proto22["m_srcTableName"] = "billing";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Location_ID",
	"m_strTable" => "billing",
	"m_srcTableName" => "billing"
));

$proto24["m_sql"] = "Location_ID";
$proto24["m_srcTableName"] = "billing";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "billing";
$proto27["m_srcTableName"] = "billing";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "Bill_ID";
$proto27["m_columns"][] = "TotalAmount";
$proto27["m_columns"][] = "BillDate";
$proto27["m_columns"][] = "BillStatus";
$proto27["m_columns"][] = "AmountTax";
$proto27["m_columns"][] = "AmountBalance";
$proto27["m_columns"][] = "AmountAdvance";
$proto27["m_columns"][] = "Discount_ID";
$proto27["m_columns"][] = "Cust_ID";
$proto27["m_columns"][] = "Location_ID";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "billing";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "billing";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="billing";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_billing = createSqlQuery_billing();


	
		;

										

$tdatabilling[".sqlquery"] = $queryData_billing;

$tableEvents["billing"] = new eventsBase;
$tdatabilling[".hasEvents"] = false;

?>