<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabooking = array();
	$tdatabooking[".truncateText"] = true;
	$tdatabooking[".NumberOfChars"] = 80;
	$tdatabooking[".ShortName"] = "booking";
	$tdatabooking[".OwnerID"] = "";
	$tdatabooking[".OriginalTable"] = "booking";

//	field labels
$fieldLabelsbooking = array();
$fieldToolTipsbooking = array();
$pageTitlesbooking = array();
$placeHoldersbooking = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbooking["English"] = array();
	$fieldToolTipsbooking["English"] = array();
	$placeHoldersbooking["English"] = array();
	$pageTitlesbooking["English"] = array();
	$fieldLabelsbooking["English"]["Book_ID"] = "Book ID";
	$fieldToolTipsbooking["English"]["Book_ID"] = "";
	$placeHoldersbooking["English"]["Book_ID"] = "";
	$fieldLabelsbooking["English"]["StartDate"] = "Start Date";
	$fieldToolTipsbooking["English"]["StartDate"] = "";
	$placeHoldersbooking["English"]["StartDate"] = "";
	$fieldLabelsbooking["English"]["EndDate"] = "End Date";
	$fieldToolTipsbooking["English"]["EndDate"] = "";
	$placeHoldersbooking["English"]["EndDate"] = "";
	$fieldLabelsbooking["English"]["SecurityDeposit"] = "Security Deposit";
	$fieldToolTipsbooking["English"]["SecurityDeposit"] = "";
	$placeHoldersbooking["English"]["SecurityDeposit"] = "";
	$fieldLabelsbooking["English"]["BookStatus"] = "Book Status";
	$fieldToolTipsbooking["English"]["BookStatus"] = "";
	$placeHoldersbooking["English"]["BookStatus"] = "";
	$fieldLabelsbooking["English"]["VIN"] = "VIN";
	$fieldToolTipsbooking["English"]["VIN"] = "";
	$placeHoldersbooking["English"]["VIN"] = "";
	$fieldLabelsbooking["English"]["Bill_ID"] = "Bill ID";
	$fieldToolTipsbooking["English"]["Bill_ID"] = "";
	$placeHoldersbooking["English"]["Bill_ID"] = "";
	if (count($fieldToolTipsbooking["English"]))
		$tdatabooking[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbooking[""] = array();
	$fieldToolTipsbooking[""] = array();
	$placeHoldersbooking[""] = array();
	$pageTitlesbooking[""] = array();
	if (count($fieldToolTipsbooking[""]))
		$tdatabooking[".isUseToolTips"] = true;
}


	$tdatabooking[".NCSearch"] = true;



$tdatabooking[".shortTableName"] = "booking";
$tdatabooking[".nSecOptions"] = 0;
$tdatabooking[".recsPerRowPrint"] = 1;
$tdatabooking[".mainTableOwnerID"] = "";
$tdatabooking[".moveNext"] = 1;
$tdatabooking[".entityType"] = 0;

$tdatabooking[".strOriginalTableName"] = "booking";

	



$tdatabooking[".showAddInPopup"] = false;

$tdatabooking[".showEditInPopup"] = false;

$tdatabooking[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabooking[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabooking[".fieldsForRegister"] = array();

$tdatabooking[".listAjax"] = false;

	$tdatabooking[".audit"] = false;

	$tdatabooking[".locking"] = false;

$tdatabooking[".edit"] = true;
$tdatabooking[".afterEditAction"] = 1;
$tdatabooking[".closePopupAfterEdit"] = 1;
$tdatabooking[".afterEditActionDetTable"] = "";

$tdatabooking[".add"] = true;
$tdatabooking[".afterAddAction"] = 1;
$tdatabooking[".closePopupAfterAdd"] = 1;
$tdatabooking[".afterAddActionDetTable"] = "";

$tdatabooking[".list"] = true;



$tdatabooking[".reorderRecordsByHeader"] = true;


$tdatabooking[".exportFormatting"] = 2;
$tdatabooking[".exportDelimiter"] = ",";
		
$tdatabooking[".view"] = true;

$tdatabooking[".import"] = true;

$tdatabooking[".exportTo"] = true;

$tdatabooking[".printFriendly"] = true;

$tdatabooking[".delete"] = true;

$tdatabooking[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabooking[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatabooking[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatabooking[".searchSaving"] = false;
//

$tdatabooking[".showSearchPanel"] = true;
		$tdatabooking[".flexibleSearch"] = true;

$tdatabooking[".isUseAjaxSuggest"] = true;

$tdatabooking[".rowHighlite"] = true;





$tdatabooking[".ajaxCodeSnippetAdded"] = false;

$tdatabooking[".buttonsAdded"] = false;

$tdatabooking[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabooking[".isUseTimeForSearch"] = false;



$tdatabooking[".badgeColor"] = "4682B4";


$tdatabooking[".allSearchFields"] = array();
$tdatabooking[".filterFields"] = array();
$tdatabooking[".requiredSearchFields"] = array();

$tdatabooking[".allSearchFields"][] = "Book_ID";
	$tdatabooking[".allSearchFields"][] = "StartDate";
	$tdatabooking[".allSearchFields"][] = "EndDate";
	$tdatabooking[".allSearchFields"][] = "SecurityDeposit";
	$tdatabooking[".allSearchFields"][] = "BookStatus";
	$tdatabooking[".allSearchFields"][] = "VIN";
	$tdatabooking[".allSearchFields"][] = "Bill_ID";
	

$tdatabooking[".googleLikeFields"] = array();
$tdatabooking[".googleLikeFields"][] = "Book_ID";
$tdatabooking[".googleLikeFields"][] = "StartDate";
$tdatabooking[".googleLikeFields"][] = "EndDate";
$tdatabooking[".googleLikeFields"][] = "SecurityDeposit";
$tdatabooking[".googleLikeFields"][] = "BookStatus";
$tdatabooking[".googleLikeFields"][] = "VIN";
$tdatabooking[".googleLikeFields"][] = "Bill_ID";


$tdatabooking[".advSearchFields"] = array();
$tdatabooking[".advSearchFields"][] = "Book_ID";
$tdatabooking[".advSearchFields"][] = "StartDate";
$tdatabooking[".advSearchFields"][] = "EndDate";
$tdatabooking[".advSearchFields"][] = "SecurityDeposit";
$tdatabooking[".advSearchFields"][] = "BookStatus";
$tdatabooking[".advSearchFields"][] = "VIN";
$tdatabooking[".advSearchFields"][] = "Bill_ID";

$tdatabooking[".tableType"] = "list";

$tdatabooking[".printerPageOrientation"] = 0;
$tdatabooking[".nPrinterPageScale"] = 100;

$tdatabooking[".nPrinterSplitRecords"] = 40;

$tdatabooking[".nPrinterPDFSplitRecords"] = 40;



$tdatabooking[".geocodingEnabled"] = false;





$tdatabooking[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabooking[".pageSize"] = 20;

$tdatabooking[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabooking[".strOrderBy"] = $tstrOrderBy;

$tdatabooking[".orderindexes"] = array();

$tdatabooking[".sqlHead"] = "SELECT Book_ID,  	StartDate,  	EndDate,  	SecurityDeposit,  	BookStatus,  	VIN,  	Bill_ID";
$tdatabooking[".sqlFrom"] = "FROM booking";
$tdatabooking[".sqlWhereExpr"] = "";
$tdatabooking[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabooking[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabooking[".arrGroupsPerPage"] = $arrGPP;

$tdatabooking[".highlightSearchResults"] = true;

$tableKeysbooking = array();
$tableKeysbooking[] = "Book_ID";
$tdatabooking[".Keys"] = $tableKeysbooking;

$tdatabooking[".listFields"] = array();
$tdatabooking[".listFields"][] = "Book_ID";
$tdatabooking[".listFields"][] = "StartDate";
$tdatabooking[".listFields"][] = "EndDate";
$tdatabooking[".listFields"][] = "SecurityDeposit";
$tdatabooking[".listFields"][] = "BookStatus";
$tdatabooking[".listFields"][] = "VIN";
$tdatabooking[".listFields"][] = "Bill_ID";

$tdatabooking[".hideMobileList"] = array();


$tdatabooking[".viewFields"] = array();
$tdatabooking[".viewFields"][] = "Book_ID";
$tdatabooking[".viewFields"][] = "StartDate";
$tdatabooking[".viewFields"][] = "EndDate";
$tdatabooking[".viewFields"][] = "SecurityDeposit";
$tdatabooking[".viewFields"][] = "BookStatus";
$tdatabooking[".viewFields"][] = "VIN";
$tdatabooking[".viewFields"][] = "Bill_ID";

$tdatabooking[".addFields"] = array();
$tdatabooking[".addFields"][] = "Book_ID";
$tdatabooking[".addFields"][] = "StartDate";
$tdatabooking[".addFields"][] = "EndDate";
$tdatabooking[".addFields"][] = "SecurityDeposit";
$tdatabooking[".addFields"][] = "BookStatus";
$tdatabooking[".addFields"][] = "VIN";
$tdatabooking[".addFields"][] = "Bill_ID";

$tdatabooking[".masterListFields"] = array();
$tdatabooking[".masterListFields"][] = "Book_ID";
$tdatabooking[".masterListFields"][] = "StartDate";
$tdatabooking[".masterListFields"][] = "EndDate";
$tdatabooking[".masterListFields"][] = "SecurityDeposit";
$tdatabooking[".masterListFields"][] = "BookStatus";
$tdatabooking[".masterListFields"][] = "VIN";
$tdatabooking[".masterListFields"][] = "Bill_ID";

$tdatabooking[".inlineAddFields"] = array();
$tdatabooking[".inlineAddFields"][] = "Book_ID";
$tdatabooking[".inlineAddFields"][] = "StartDate";
$tdatabooking[".inlineAddFields"][] = "EndDate";
$tdatabooking[".inlineAddFields"][] = "SecurityDeposit";
$tdatabooking[".inlineAddFields"][] = "BookStatus";
$tdatabooking[".inlineAddFields"][] = "VIN";
$tdatabooking[".inlineAddFields"][] = "Bill_ID";

$tdatabooking[".editFields"] = array();
$tdatabooking[".editFields"][] = "Book_ID";
$tdatabooking[".editFields"][] = "StartDate";
$tdatabooking[".editFields"][] = "EndDate";
$tdatabooking[".editFields"][] = "SecurityDeposit";
$tdatabooking[".editFields"][] = "BookStatus";
$tdatabooking[".editFields"][] = "VIN";
$tdatabooking[".editFields"][] = "Bill_ID";

$tdatabooking[".inlineEditFields"] = array();
$tdatabooking[".inlineEditFields"][] = "Book_ID";
$tdatabooking[".inlineEditFields"][] = "StartDate";
$tdatabooking[".inlineEditFields"][] = "EndDate";
$tdatabooking[".inlineEditFields"][] = "SecurityDeposit";
$tdatabooking[".inlineEditFields"][] = "BookStatus";
$tdatabooking[".inlineEditFields"][] = "VIN";
$tdatabooking[".inlineEditFields"][] = "Bill_ID";

$tdatabooking[".updateSelectedFields"] = array();
$tdatabooking[".updateSelectedFields"][] = "Book_ID";
$tdatabooking[".updateSelectedFields"][] = "StartDate";
$tdatabooking[".updateSelectedFields"][] = "EndDate";
$tdatabooking[".updateSelectedFields"][] = "SecurityDeposit";
$tdatabooking[".updateSelectedFields"][] = "BookStatus";
$tdatabooking[".updateSelectedFields"][] = "VIN";
$tdatabooking[".updateSelectedFields"][] = "Bill_ID";


$tdatabooking[".exportFields"] = array();
$tdatabooking[".exportFields"][] = "Book_ID";
$tdatabooking[".exportFields"][] = "StartDate";
$tdatabooking[".exportFields"][] = "EndDate";
$tdatabooking[".exportFields"][] = "SecurityDeposit";
$tdatabooking[".exportFields"][] = "BookStatus";
$tdatabooking[".exportFields"][] = "VIN";
$tdatabooking[".exportFields"][] = "Bill_ID";

$tdatabooking[".importFields"] = array();
$tdatabooking[".importFields"][] = "Book_ID";
$tdatabooking[".importFields"][] = "StartDate";
$tdatabooking[".importFields"][] = "EndDate";
$tdatabooking[".importFields"][] = "SecurityDeposit";
$tdatabooking[".importFields"][] = "BookStatus";
$tdatabooking[".importFields"][] = "VIN";
$tdatabooking[".importFields"][] = "Bill_ID";

$tdatabooking[".printFields"] = array();
$tdatabooking[".printFields"][] = "Book_ID";
$tdatabooking[".printFields"][] = "StartDate";
$tdatabooking[".printFields"][] = "EndDate";
$tdatabooking[".printFields"][] = "SecurityDeposit";
$tdatabooking[".printFields"][] = "BookStatus";
$tdatabooking[".printFields"][] = "VIN";
$tdatabooking[".printFields"][] = "Bill_ID";


//	Book_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Book_ID";
	$fdata["GoodName"] = "Book_ID";
	$fdata["ownerTable"] = "booking";
	$fdata["Label"] = GetFieldLabel("booking","Book_ID");
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

		$fdata["strField"] = "Book_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Book_ID";

	
	
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




	$tdatabooking["Book_ID"] = $fdata;
//	StartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StartDate";
	$fdata["GoodName"] = "StartDate";
	$fdata["ownerTable"] = "booking";
	$fdata["Label"] = GetFieldLabel("booking","StartDate");
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

		$fdata["strField"] = "StartDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StartDate";

	
	
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




	$tdatabooking["StartDate"] = $fdata;
//	EndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EndDate";
	$fdata["GoodName"] = "EndDate";
	$fdata["ownerTable"] = "booking";
	$fdata["Label"] = GetFieldLabel("booking","EndDate");
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

		$fdata["strField"] = "EndDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EndDate";

	
	
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




	$tdatabooking["EndDate"] = $fdata;
//	SecurityDeposit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SecurityDeposit";
	$fdata["GoodName"] = "SecurityDeposit";
	$fdata["ownerTable"] = "booking";
	$fdata["Label"] = GetFieldLabel("booking","SecurityDeposit");
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

		$fdata["strField"] = "SecurityDeposit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SecurityDeposit";

	
	
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




	$tdatabooking["SecurityDeposit"] = $fdata;
//	BookStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BookStatus";
	$fdata["GoodName"] = "BookStatus";
	$fdata["ownerTable"] = "booking";
	$fdata["Label"] = GetFieldLabel("booking","BookStatus");
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

		$fdata["strField"] = "BookStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BookStatus";

	
	
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




	$tdatabooking["BookStatus"] = $fdata;
//	VIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "VIN";
	$fdata["GoodName"] = "VIN";
	$fdata["ownerTable"] = "booking";
	$fdata["Label"] = GetFieldLabel("booking","VIN");
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




	$tdatabooking["VIN"] = $fdata;
//	Bill_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Bill_ID";
	$fdata["GoodName"] = "Bill_ID";
	$fdata["ownerTable"] = "booking";
	$fdata["Label"] = GetFieldLabel("booking","Bill_ID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "billing";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Bill_ID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Bill_ID";
	
	

	
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




	$tdatabooking["Bill_ID"] = $fdata;


$tables_data["booking"]=&$tdatabooking;
$field_labels["booking"] = &$fieldLabelsbooking;
$fieldToolTips["booking"] = &$fieldToolTipsbooking;
$placeHolders["booking"] = &$placeHoldersbooking;
$page_titles["booking"] = &$pageTitlesbooking;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["booking"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["booking"] = array();


	
				$strOriginalDetailsTable="billing";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="billing";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "billing";
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
					$masterTablesData["booking"][0] = $masterParams;
				$masterTablesData["booking"][0]["masterKeys"] = array();
	$masterTablesData["booking"][0]["masterKeys"][]="Bill_ID";
				$masterTablesData["booking"][0]["detailKeys"] = array();
	$masterTablesData["booking"][0]["detailKeys"][]="Bill_ID";
		
	
				$strOriginalDetailsTable="vehicle";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="vehicle";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vehicle";
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
					$masterTablesData["booking"][1] = $masterParams;
				$masterTablesData["booking"][1]["masterKeys"] = array();
	$masterTablesData["booking"][1]["masterKeys"][]="VIN";
				$masterTablesData["booking"][1]["detailKeys"] = array();
	$masterTablesData["booking"][1]["detailKeys"][]="VIN";
		
	
				$strOriginalDetailsTable="billing";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="revenue_by_location";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "revenue_by_location";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["booking"][2] = $masterParams;
				$masterTablesData["booking"][2]["masterKeys"] = array();
	$masterTablesData["booking"][2]["masterKeys"][]="Bill_ID";
				$masterTablesData["booking"][2]["detailKeys"] = array();
	$masterTablesData["booking"][2]["detailKeys"][]="Bill_ID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_booking()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Book_ID,  	StartDate,  	EndDate,  	SecurityDeposit,  	BookStatus,  	VIN,  	Bill_ID";
$proto0["m_strFrom"] = "FROM booking";
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
	"m_strName" => "Book_ID",
	"m_strTable" => "booking",
	"m_srcTableName" => "booking"
));

$proto6["m_sql"] = "Book_ID";
$proto6["m_srcTableName"] = "booking";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "StartDate",
	"m_strTable" => "booking",
	"m_srcTableName" => "booking"
));

$proto8["m_sql"] = "StartDate";
$proto8["m_srcTableName"] = "booking";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EndDate",
	"m_strTable" => "booking",
	"m_srcTableName" => "booking"
));

$proto10["m_sql"] = "EndDate";
$proto10["m_srcTableName"] = "booking";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SecurityDeposit",
	"m_strTable" => "booking",
	"m_srcTableName" => "booking"
));

$proto12["m_sql"] = "SecurityDeposit";
$proto12["m_srcTableName"] = "booking";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BookStatus",
	"m_strTable" => "booking",
	"m_srcTableName" => "booking"
));

$proto14["m_sql"] = "BookStatus";
$proto14["m_srcTableName"] = "booking";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "VIN",
	"m_strTable" => "booking",
	"m_srcTableName" => "booking"
));

$proto16["m_sql"] = "VIN";
$proto16["m_srcTableName"] = "booking";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Bill_ID",
	"m_strTable" => "booking",
	"m_srcTableName" => "booking"
));

$proto18["m_sql"] = "Bill_ID";
$proto18["m_srcTableName"] = "booking";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "booking";
$proto21["m_srcTableName"] = "booking";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "Book_ID";
$proto21["m_columns"][] = "StartDate";
$proto21["m_columns"][] = "EndDate";
$proto21["m_columns"][] = "SecurityDeposit";
$proto21["m_columns"][] = "BookStatus";
$proto21["m_columns"][] = "VIN";
$proto21["m_columns"][] = "Bill_ID";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "booking";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "booking";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="booking";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_booking = createSqlQuery_booking();


	
		;

							

$tdatabooking[".sqlquery"] = $queryData_booking;

$tableEvents["booking"] = new eventsBase;
$tdatabooking[".hasEvents"] = false;

?>