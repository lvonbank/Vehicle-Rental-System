<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayment = array();
	$tdatapayment[".truncateText"] = true;
	$tdatapayment[".NumberOfChars"] = 80;
	$tdatapayment[".ShortName"] = "payment";
	$tdatapayment[".OwnerID"] = "";
	$tdatapayment[".OriginalTable"] = "payment";

//	field labels
$fieldLabelspayment = array();
$fieldToolTipspayment = array();
$pageTitlespayment = array();
$placeHolderspayment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayment["English"] = array();
	$fieldToolTipspayment["English"] = array();
	$placeHolderspayment["English"] = array();
	$pageTitlespayment["English"] = array();
	$fieldLabelspayment["English"]["Payment_ID"] = "Payment ID";
	$fieldToolTipspayment["English"]["Payment_ID"] = "";
	$placeHolderspayment["English"]["Payment_ID"] = "";
	$fieldLabelspayment["English"]["PaymentType"] = "Payment Type";
	$fieldToolTipspayment["English"]["PaymentType"] = "";
	$placeHolderspayment["English"]["PaymentType"] = "";
	$fieldLabelspayment["English"]["TransactionNum"] = "Transaction Num";
	$fieldToolTipspayment["English"]["TransactionNum"] = "";
	$placeHolderspayment["English"]["TransactionNum"] = "";
	$fieldLabelspayment["English"]["Cust_ID"] = "Cust ID";
	$fieldToolTipspayment["English"]["Cust_ID"] = "";
	$placeHolderspayment["English"]["Cust_ID"] = "";
	$fieldLabelspayment["English"]["Bill_ID"] = "Bill ID";
	$fieldToolTipspayment["English"]["Bill_ID"] = "";
	$placeHolderspayment["English"]["Bill_ID"] = "";
	if (count($fieldToolTipspayment["English"]))
		$tdatapayment[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayment[""] = array();
	$fieldToolTipspayment[""] = array();
	$placeHolderspayment[""] = array();
	$pageTitlespayment[""] = array();
	if (count($fieldToolTipspayment[""]))
		$tdatapayment[".isUseToolTips"] = true;
}


	$tdatapayment[".NCSearch"] = true;



$tdatapayment[".shortTableName"] = "payment";
$tdatapayment[".nSecOptions"] = 0;
$tdatapayment[".recsPerRowPrint"] = 1;
$tdatapayment[".mainTableOwnerID"] = "";
$tdatapayment[".moveNext"] = 1;
$tdatapayment[".entityType"] = 0;

$tdatapayment[".strOriginalTableName"] = "payment";

	



$tdatapayment[".showAddInPopup"] = false;

$tdatapayment[".showEditInPopup"] = false;

$tdatapayment[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayment[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayment[".fieldsForRegister"] = array();

$tdatapayment[".listAjax"] = false;

	$tdatapayment[".audit"] = false;

	$tdatapayment[".locking"] = false;

$tdatapayment[".edit"] = true;
$tdatapayment[".afterEditAction"] = 1;
$tdatapayment[".closePopupAfterEdit"] = 1;
$tdatapayment[".afterEditActionDetTable"] = "";

$tdatapayment[".add"] = true;
$tdatapayment[".afterAddAction"] = 1;
$tdatapayment[".closePopupAfterAdd"] = 1;
$tdatapayment[".afterAddActionDetTable"] = "";

$tdatapayment[".list"] = true;



$tdatapayment[".reorderRecordsByHeader"] = true;


$tdatapayment[".exportFormatting"] = 2;
$tdatapayment[".exportDelimiter"] = ",";
		
$tdatapayment[".view"] = true;

$tdatapayment[".import"] = true;

$tdatapayment[".exportTo"] = true;

$tdatapayment[".printFriendly"] = true;

$tdatapayment[".delete"] = true;

$tdatapayment[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayment[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayment[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayment[".searchSaving"] = false;
//

$tdatapayment[".showSearchPanel"] = true;
		$tdatapayment[".flexibleSearch"] = true;

$tdatapayment[".isUseAjaxSuggest"] = true;

$tdatapayment[".rowHighlite"] = true;





$tdatapayment[".ajaxCodeSnippetAdded"] = false;

$tdatapayment[".buttonsAdded"] = false;

$tdatapayment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayment[".isUseTimeForSearch"] = false;





$tdatapayment[".allSearchFields"] = array();
$tdatapayment[".filterFields"] = array();
$tdatapayment[".requiredSearchFields"] = array();

$tdatapayment[".allSearchFields"][] = "Payment_ID";
	$tdatapayment[".allSearchFields"][] = "PaymentType";
	$tdatapayment[".allSearchFields"][] = "TransactionNum";
	$tdatapayment[".allSearchFields"][] = "Cust_ID";
	$tdatapayment[".allSearchFields"][] = "Bill_ID";
	

$tdatapayment[".googleLikeFields"] = array();
$tdatapayment[".googleLikeFields"][] = "Payment_ID";
$tdatapayment[".googleLikeFields"][] = "PaymentType";
$tdatapayment[".googleLikeFields"][] = "TransactionNum";
$tdatapayment[".googleLikeFields"][] = "Cust_ID";
$tdatapayment[".googleLikeFields"][] = "Bill_ID";


$tdatapayment[".advSearchFields"] = array();
$tdatapayment[".advSearchFields"][] = "Payment_ID";
$tdatapayment[".advSearchFields"][] = "PaymentType";
$tdatapayment[".advSearchFields"][] = "TransactionNum";
$tdatapayment[".advSearchFields"][] = "Cust_ID";
$tdatapayment[".advSearchFields"][] = "Bill_ID";

$tdatapayment[".tableType"] = "list";

$tdatapayment[".printerPageOrientation"] = 0;
$tdatapayment[".nPrinterPageScale"] = 100;

$tdatapayment[".nPrinterSplitRecords"] = 40;

$tdatapayment[".nPrinterPDFSplitRecords"] = 40;



$tdatapayment[".geocodingEnabled"] = false;





$tdatapayment[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapayment[".pageSize"] = 20;

$tdatapayment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayment[".strOrderBy"] = $tstrOrderBy;

$tdatapayment[".orderindexes"] = array();

$tdatapayment[".sqlHead"] = "SELECT Payment_ID,  	PaymentType,  	TransactionNum,  	Cust_ID,  	Bill_ID";
$tdatapayment[".sqlFrom"] = "FROM payment";
$tdatapayment[".sqlWhereExpr"] = "";
$tdatapayment[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayment[".arrGroupsPerPage"] = $arrGPP;

$tdatapayment[".highlightSearchResults"] = true;

$tableKeyspayment = array();
$tableKeyspayment[] = "Payment_ID";
$tdatapayment[".Keys"] = $tableKeyspayment;

$tdatapayment[".listFields"] = array();
$tdatapayment[".listFields"][] = "Payment_ID";
$tdatapayment[".listFields"][] = "PaymentType";
$tdatapayment[".listFields"][] = "TransactionNum";
$tdatapayment[".listFields"][] = "Cust_ID";
$tdatapayment[".listFields"][] = "Bill_ID";

$tdatapayment[".hideMobileList"] = array();


$tdatapayment[".viewFields"] = array();
$tdatapayment[".viewFields"][] = "Payment_ID";
$tdatapayment[".viewFields"][] = "PaymentType";
$tdatapayment[".viewFields"][] = "TransactionNum";
$tdatapayment[".viewFields"][] = "Cust_ID";
$tdatapayment[".viewFields"][] = "Bill_ID";

$tdatapayment[".addFields"] = array();
$tdatapayment[".addFields"][] = "Payment_ID";
$tdatapayment[".addFields"][] = "PaymentType";
$tdatapayment[".addFields"][] = "TransactionNum";
$tdatapayment[".addFields"][] = "Cust_ID";
$tdatapayment[".addFields"][] = "Bill_ID";

$tdatapayment[".masterListFields"] = array();
$tdatapayment[".masterListFields"][] = "Payment_ID";
$tdatapayment[".masterListFields"][] = "PaymentType";
$tdatapayment[".masterListFields"][] = "TransactionNum";
$tdatapayment[".masterListFields"][] = "Cust_ID";
$tdatapayment[".masterListFields"][] = "Bill_ID";

$tdatapayment[".inlineAddFields"] = array();
$tdatapayment[".inlineAddFields"][] = "Payment_ID";
$tdatapayment[".inlineAddFields"][] = "PaymentType";
$tdatapayment[".inlineAddFields"][] = "TransactionNum";
$tdatapayment[".inlineAddFields"][] = "Cust_ID";
$tdatapayment[".inlineAddFields"][] = "Bill_ID";

$tdatapayment[".editFields"] = array();
$tdatapayment[".editFields"][] = "Payment_ID";
$tdatapayment[".editFields"][] = "PaymentType";
$tdatapayment[".editFields"][] = "TransactionNum";
$tdatapayment[".editFields"][] = "Cust_ID";
$tdatapayment[".editFields"][] = "Bill_ID";

$tdatapayment[".inlineEditFields"] = array();
$tdatapayment[".inlineEditFields"][] = "Payment_ID";
$tdatapayment[".inlineEditFields"][] = "PaymentType";
$tdatapayment[".inlineEditFields"][] = "TransactionNum";
$tdatapayment[".inlineEditFields"][] = "Cust_ID";
$tdatapayment[".inlineEditFields"][] = "Bill_ID";

$tdatapayment[".updateSelectedFields"] = array();
$tdatapayment[".updateSelectedFields"][] = "Payment_ID";
$tdatapayment[".updateSelectedFields"][] = "PaymentType";
$tdatapayment[".updateSelectedFields"][] = "TransactionNum";
$tdatapayment[".updateSelectedFields"][] = "Cust_ID";
$tdatapayment[".updateSelectedFields"][] = "Bill_ID";


$tdatapayment[".exportFields"] = array();
$tdatapayment[".exportFields"][] = "Payment_ID";
$tdatapayment[".exportFields"][] = "PaymentType";
$tdatapayment[".exportFields"][] = "TransactionNum";
$tdatapayment[".exportFields"][] = "Cust_ID";
$tdatapayment[".exportFields"][] = "Bill_ID";

$tdatapayment[".importFields"] = array();
$tdatapayment[".importFields"][] = "Payment_ID";
$tdatapayment[".importFields"][] = "PaymentType";
$tdatapayment[".importFields"][] = "TransactionNum";
$tdatapayment[".importFields"][] = "Cust_ID";
$tdatapayment[".importFields"][] = "Bill_ID";

$tdatapayment[".printFields"] = array();
$tdatapayment[".printFields"][] = "Payment_ID";
$tdatapayment[".printFields"][] = "PaymentType";
$tdatapayment[".printFields"][] = "TransactionNum";
$tdatapayment[".printFields"][] = "Cust_ID";
$tdatapayment[".printFields"][] = "Bill_ID";


//	Payment_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Payment_ID";
	$fdata["GoodName"] = "Payment_ID";
	$fdata["ownerTable"] = "payment";
	$fdata["Label"] = GetFieldLabel("payment","Payment_ID");
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

		$fdata["strField"] = "Payment_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Payment_ID";

	
	
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




	$tdatapayment["Payment_ID"] = $fdata;
//	PaymentType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PaymentType";
	$fdata["GoodName"] = "PaymentType";
	$fdata["ownerTable"] = "payment";
	$fdata["Label"] = GetFieldLabel("payment","PaymentType");
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

		$fdata["strField"] = "PaymentType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentType";

	
	
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




	$tdatapayment["PaymentType"] = $fdata;
//	TransactionNum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TransactionNum";
	$fdata["GoodName"] = "TransactionNum";
	$fdata["ownerTable"] = "payment";
	$fdata["Label"] = GetFieldLabel("payment","TransactionNum");
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

		$fdata["strField"] = "TransactionNum";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TransactionNum";

	
	
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




	$tdatapayment["TransactionNum"] = $fdata;
//	Cust_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cust_ID";
	$fdata["GoodName"] = "Cust_ID";
	$fdata["ownerTable"] = "payment";
	$fdata["Label"] = GetFieldLabel("payment","Cust_ID");
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




	$tdatapayment["Cust_ID"] = $fdata;
//	Bill_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Bill_ID";
	$fdata["GoodName"] = "Bill_ID";
	$fdata["ownerTable"] = "payment";
	$fdata["Label"] = GetFieldLabel("payment","Bill_ID");
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




	$tdatapayment["Bill_ID"] = $fdata;


$tables_data["payment"]=&$tdatapayment;
$field_labels["payment"] = &$fieldLabelspayment;
$fieldToolTips["payment"] = &$fieldToolTipspayment;
$placeHolders["payment"] = &$placeHolderspayment;
$page_titles["payment"] = &$pageTitlespayment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payment"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["payment"] = array();


	
				$strOriginalDetailsTable="billing";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="billing";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "billing";
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
					$masterTablesData["payment"][0] = $masterParams;
				$masterTablesData["payment"][0]["masterKeys"] = array();
	$masterTablesData["payment"][0]["masterKeys"][]="Bill_ID";
				$masterTablesData["payment"][0]["detailKeys"] = array();
	$masterTablesData["payment"][0]["detailKeys"][]="Bill_ID";
		
	
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
					$masterTablesData["payment"][1] = $masterParams;
				$masterTablesData["payment"][1]["masterKeys"] = array();
	$masterTablesData["payment"][1]["masterKeys"][]="Cust_ID";
				$masterTablesData["payment"][1]["detailKeys"] = array();
	$masterTablesData["payment"][1]["detailKeys"][]="Cust_ID";
		
	
				$strOriginalDetailsTable="billing";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="revenue_by_location";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "revenue_by_location";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["payment"][2] = $masterParams;
				$masterTablesData["payment"][2]["masterKeys"] = array();
	$masterTablesData["payment"][2]["masterKeys"][]="Bill_ID";
				$masterTablesData["payment"][2]["detailKeys"] = array();
	$masterTablesData["payment"][2]["detailKeys"][]="Bill_ID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Payment_ID,  	PaymentType,  	TransactionNum,  	Cust_ID,  	Bill_ID";
$proto0["m_strFrom"] = "FROM payment";
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
	"m_strName" => "Payment_ID",
	"m_strTable" => "payment",
	"m_srcTableName" => "payment"
));

$proto6["m_sql"] = "Payment_ID";
$proto6["m_srcTableName"] = "payment";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentType",
	"m_strTable" => "payment",
	"m_srcTableName" => "payment"
));

$proto8["m_sql"] = "PaymentType";
$proto8["m_srcTableName"] = "payment";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TransactionNum",
	"m_strTable" => "payment",
	"m_srcTableName" => "payment"
));

$proto10["m_sql"] = "TransactionNum";
$proto10["m_srcTableName"] = "payment";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cust_ID",
	"m_strTable" => "payment",
	"m_srcTableName" => "payment"
));

$proto12["m_sql"] = "Cust_ID";
$proto12["m_srcTableName"] = "payment";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Bill_ID",
	"m_strTable" => "payment",
	"m_srcTableName" => "payment"
));

$proto14["m_sql"] = "Bill_ID";
$proto14["m_srcTableName"] = "payment";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "payment";
$proto17["m_srcTableName"] = "payment";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "Payment_ID";
$proto17["m_columns"][] = "PaymentType";
$proto17["m_columns"][] = "TransactionNum";
$proto17["m_columns"][] = "Cust_ID";
$proto17["m_columns"][] = "Bill_ID";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "payment";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "payment";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="payment";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payment = createSqlQuery_payment();


	
		;

					

$tdatapayment[".sqlquery"] = $queryData_payment;

$tableEvents["payment"] = new eventsBase;
$tdatapayment[".hasEvents"] = false;

?>