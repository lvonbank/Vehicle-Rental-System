<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacustomer = array();
	$tdatacustomer[".truncateText"] = true;
	$tdatacustomer[".NumberOfChars"] = 80;
	$tdatacustomer[".ShortName"] = "customer";
	$tdatacustomer[".OwnerID"] = "";
	$tdatacustomer[".OriginalTable"] = "customer";

//	field labels
$fieldLabelscustomer = array();
$fieldToolTipscustomer = array();
$pageTitlescustomer = array();
$placeHolderscustomer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustomer["English"] = array();
	$fieldToolTipscustomer["English"] = array();
	$placeHolderscustomer["English"] = array();
	$pageTitlescustomer["English"] = array();
	$fieldLabelscustomer["English"]["Cust_ID"] = "Cust ID";
	$fieldToolTipscustomer["English"]["Cust_ID"] = "";
	$placeHolderscustomer["English"]["Cust_ID"] = "";
	$fieldLabelscustomer["English"]["FirstName"] = "First Name";
	$fieldToolTipscustomer["English"]["FirstName"] = "";
	$placeHolderscustomer["English"]["FirstName"] = "";
	$fieldLabelscustomer["English"]["MiddleName"] = "Middle Name";
	$fieldToolTipscustomer["English"]["MiddleName"] = "";
	$placeHolderscustomer["English"]["MiddleName"] = "";
	$fieldLabelscustomer["English"]["LastName"] = "Last Name";
	$fieldToolTipscustomer["English"]["LastName"] = "";
	$placeHolderscustomer["English"]["LastName"] = "";
	$fieldLabelscustomer["English"]["Status"] = "Status";
	$fieldToolTipscustomer["English"]["Status"] = "";
	$placeHolderscustomer["English"]["Status"] = "";
	$fieldLabelscustomer["English"]["Gender"] = "Gender";
	$fieldToolTipscustomer["English"]["Gender"] = "";
	$placeHolderscustomer["English"]["Gender"] = "";
	$fieldLabelscustomer["English"]["DOB"] = "DOB";
	$fieldToolTipscustomer["English"]["DOB"] = "";
	$placeHolderscustomer["English"]["DOB"] = "";
	$fieldLabelscustomer["English"]["Email"] = "Email";
	$fieldToolTipscustomer["English"]["Email"] = "";
	$placeHolderscustomer["English"]["Email"] = "";
	$fieldLabelscustomer["English"]["PhoneNum"] = "Phone Num";
	$fieldToolTipscustomer["English"]["PhoneNum"] = "";
	$placeHolderscustomer["English"]["PhoneNum"] = "";
	$fieldLabelscustomer["English"]["Discount_ID"] = "Discount ID";
	$fieldToolTipscustomer["English"]["Discount_ID"] = "";
	$placeHolderscustomer["English"]["Discount_ID"] = "";
	$fieldLabelscustomer["English"]["Address_ID"] = "Address ID";
	$fieldToolTipscustomer["English"]["Address_ID"] = "";
	$placeHolderscustomer["English"]["Address_ID"] = "";
	$fieldLabelscustomer["English"]["LicenceNum"] = "Licence Num";
	$fieldToolTipscustomer["English"]["LicenceNum"] = "";
	$placeHolderscustomer["English"]["LicenceNum"] = "";
	$fieldLabelscustomer["English"]["InsuranceNum"] = "Insurance Num";
	$fieldToolTipscustomer["English"]["InsuranceNum"] = "";
	$placeHolderscustomer["English"]["InsuranceNum"] = "";
	if (count($fieldToolTipscustomer["English"]))
		$tdatacustomer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscustomer[""] = array();
	$fieldToolTipscustomer[""] = array();
	$placeHolderscustomer[""] = array();
	$pageTitlescustomer[""] = array();
	if (count($fieldToolTipscustomer[""]))
		$tdatacustomer[".isUseToolTips"] = true;
}


	$tdatacustomer[".NCSearch"] = true;



$tdatacustomer[".shortTableName"] = "customer";
$tdatacustomer[".nSecOptions"] = 0;
$tdatacustomer[".recsPerRowPrint"] = 1;
$tdatacustomer[".mainTableOwnerID"] = "";
$tdatacustomer[".moveNext"] = 1;
$tdatacustomer[".entityType"] = 0;

$tdatacustomer[".strOriginalTableName"] = "customer";

	



$tdatacustomer[".showAddInPopup"] = false;

$tdatacustomer[".showEditInPopup"] = false;

$tdatacustomer[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustomer[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustomer[".fieldsForRegister"] = array();

$tdatacustomer[".listAjax"] = false;

	$tdatacustomer[".audit"] = false;

	$tdatacustomer[".locking"] = false;

$tdatacustomer[".edit"] = true;
$tdatacustomer[".afterEditAction"] = 1;
$tdatacustomer[".closePopupAfterEdit"] = 1;
$tdatacustomer[".afterEditActionDetTable"] = "";

$tdatacustomer[".add"] = true;
$tdatacustomer[".afterAddAction"] = 1;
$tdatacustomer[".closePopupAfterAdd"] = 1;
$tdatacustomer[".afterAddActionDetTable"] = "";

$tdatacustomer[".list"] = true;



$tdatacustomer[".reorderRecordsByHeader"] = true;


$tdatacustomer[".exportFormatting"] = 2;
$tdatacustomer[".exportDelimiter"] = ",";
		
$tdatacustomer[".view"] = true;

$tdatacustomer[".import"] = true;

$tdatacustomer[".exportTo"] = true;

$tdatacustomer[".printFriendly"] = true;

$tdatacustomer[".delete"] = true;

$tdatacustomer[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacustomer[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacustomer[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacustomer[".searchSaving"] = false;
//

$tdatacustomer[".showSearchPanel"] = true;
		$tdatacustomer[".flexibleSearch"] = true;

$tdatacustomer[".isUseAjaxSuggest"] = true;

$tdatacustomer[".rowHighlite"] = true;





$tdatacustomer[".ajaxCodeSnippetAdded"] = false;

$tdatacustomer[".buttonsAdded"] = false;

$tdatacustomer[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomer[".isUseTimeForSearch"] = false;





$tdatacustomer[".allSearchFields"] = array();
$tdatacustomer[".filterFields"] = array();
$tdatacustomer[".requiredSearchFields"] = array();

$tdatacustomer[".allSearchFields"][] = "Cust_ID";
	$tdatacustomer[".allSearchFields"][] = "FirstName";
	$tdatacustomer[".allSearchFields"][] = "MiddleName";
	$tdatacustomer[".allSearchFields"][] = "LastName";
	$tdatacustomer[".allSearchFields"][] = "Status";
	$tdatacustomer[".allSearchFields"][] = "Gender";
	$tdatacustomer[".allSearchFields"][] = "DOB";
	$tdatacustomer[".allSearchFields"][] = "Email";
	$tdatacustomer[".allSearchFields"][] = "PhoneNum";
	$tdatacustomer[".allSearchFields"][] = "Discount_ID";
	$tdatacustomer[".allSearchFields"][] = "Address_ID";
	$tdatacustomer[".allSearchFields"][] = "LicenceNum";
	$tdatacustomer[".allSearchFields"][] = "InsuranceNum";
	

$tdatacustomer[".googleLikeFields"] = array();
$tdatacustomer[".googleLikeFields"][] = "Cust_ID";
$tdatacustomer[".googleLikeFields"][] = "FirstName";
$tdatacustomer[".googleLikeFields"][] = "MiddleName";
$tdatacustomer[".googleLikeFields"][] = "LastName";
$tdatacustomer[".googleLikeFields"][] = "Status";
$tdatacustomer[".googleLikeFields"][] = "Gender";
$tdatacustomer[".googleLikeFields"][] = "DOB";
$tdatacustomer[".googleLikeFields"][] = "Email";
$tdatacustomer[".googleLikeFields"][] = "PhoneNum";
$tdatacustomer[".googleLikeFields"][] = "Discount_ID";
$tdatacustomer[".googleLikeFields"][] = "Address_ID";
$tdatacustomer[".googleLikeFields"][] = "LicenceNum";
$tdatacustomer[".googleLikeFields"][] = "InsuranceNum";


$tdatacustomer[".advSearchFields"] = array();
$tdatacustomer[".advSearchFields"][] = "Cust_ID";
$tdatacustomer[".advSearchFields"][] = "FirstName";
$tdatacustomer[".advSearchFields"][] = "MiddleName";
$tdatacustomer[".advSearchFields"][] = "LastName";
$tdatacustomer[".advSearchFields"][] = "Status";
$tdatacustomer[".advSearchFields"][] = "Gender";
$tdatacustomer[".advSearchFields"][] = "DOB";
$tdatacustomer[".advSearchFields"][] = "Email";
$tdatacustomer[".advSearchFields"][] = "PhoneNum";
$tdatacustomer[".advSearchFields"][] = "Discount_ID";
$tdatacustomer[".advSearchFields"][] = "Address_ID";
$tdatacustomer[".advSearchFields"][] = "LicenceNum";
$tdatacustomer[".advSearchFields"][] = "InsuranceNum";

$tdatacustomer[".tableType"] = "list";

$tdatacustomer[".printerPageOrientation"] = 0;
$tdatacustomer[".nPrinterPageScale"] = 100;

$tdatacustomer[".nPrinterSplitRecords"] = 40;

$tdatacustomer[".nPrinterPDFSplitRecords"] = 40;



$tdatacustomer[".geocodingEnabled"] = false;





$tdatacustomer[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacustomer[".pageSize"] = 20;

$tdatacustomer[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustomer[".strOrderBy"] = $tstrOrderBy;

$tdatacustomer[".orderindexes"] = array();

$tdatacustomer[".sqlHead"] = "SELECT Cust_ID,  	FirstName,  	MiddleName,  	LastName,  	Status,  	Gender,  	DOB,  	Email,  	PhoneNum,  	Discount_ID,  	Address_ID,  	LicenceNum,  	InsuranceNum";
$tdatacustomer[".sqlFrom"] = "FROM customer";
$tdatacustomer[".sqlWhereExpr"] = "";
$tdatacustomer[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomer[".arrGroupsPerPage"] = $arrGPP;

$tdatacustomer[".highlightSearchResults"] = true;

$tableKeyscustomer = array();
$tableKeyscustomer[] = "Cust_ID";
$tdatacustomer[".Keys"] = $tableKeyscustomer;

$tdatacustomer[".listFields"] = array();
$tdatacustomer[".listFields"][] = "Cust_ID";
$tdatacustomer[".listFields"][] = "FirstName";
$tdatacustomer[".listFields"][] = "MiddleName";
$tdatacustomer[".listFields"][] = "LastName";
$tdatacustomer[".listFields"][] = "Status";
$tdatacustomer[".listFields"][] = "Gender";
$tdatacustomer[".listFields"][] = "DOB";
$tdatacustomer[".listFields"][] = "Email";
$tdatacustomer[".listFields"][] = "PhoneNum";
$tdatacustomer[".listFields"][] = "Discount_ID";
$tdatacustomer[".listFields"][] = "Address_ID";
$tdatacustomer[".listFields"][] = "LicenceNum";
$tdatacustomer[".listFields"][] = "InsuranceNum";

$tdatacustomer[".hideMobileList"] = array();


$tdatacustomer[".viewFields"] = array();
$tdatacustomer[".viewFields"][] = "Cust_ID";
$tdatacustomer[".viewFields"][] = "FirstName";
$tdatacustomer[".viewFields"][] = "MiddleName";
$tdatacustomer[".viewFields"][] = "LastName";
$tdatacustomer[".viewFields"][] = "Status";
$tdatacustomer[".viewFields"][] = "Gender";
$tdatacustomer[".viewFields"][] = "DOB";
$tdatacustomer[".viewFields"][] = "Email";
$tdatacustomer[".viewFields"][] = "PhoneNum";
$tdatacustomer[".viewFields"][] = "Discount_ID";
$tdatacustomer[".viewFields"][] = "Address_ID";
$tdatacustomer[".viewFields"][] = "LicenceNum";
$tdatacustomer[".viewFields"][] = "InsuranceNum";

$tdatacustomer[".addFields"] = array();
$tdatacustomer[".addFields"][] = "Cust_ID";
$tdatacustomer[".addFields"][] = "FirstName";
$tdatacustomer[".addFields"][] = "MiddleName";
$tdatacustomer[".addFields"][] = "LastName";
$tdatacustomer[".addFields"][] = "Status";
$tdatacustomer[".addFields"][] = "Gender";
$tdatacustomer[".addFields"][] = "DOB";
$tdatacustomer[".addFields"][] = "Email";
$tdatacustomer[".addFields"][] = "PhoneNum";
$tdatacustomer[".addFields"][] = "Discount_ID";
$tdatacustomer[".addFields"][] = "Address_ID";
$tdatacustomer[".addFields"][] = "LicenceNum";
$tdatacustomer[".addFields"][] = "InsuranceNum";

$tdatacustomer[".masterListFields"] = array();
$tdatacustomer[".masterListFields"][] = "Cust_ID";
$tdatacustomer[".masterListFields"][] = "FirstName";
$tdatacustomer[".masterListFields"][] = "MiddleName";
$tdatacustomer[".masterListFields"][] = "LastName";
$tdatacustomer[".masterListFields"][] = "Status";
$tdatacustomer[".masterListFields"][] = "Gender";
$tdatacustomer[".masterListFields"][] = "DOB";
$tdatacustomer[".masterListFields"][] = "Email";
$tdatacustomer[".masterListFields"][] = "PhoneNum";
$tdatacustomer[".masterListFields"][] = "Discount_ID";
$tdatacustomer[".masterListFields"][] = "Address_ID";
$tdatacustomer[".masterListFields"][] = "LicenceNum";
$tdatacustomer[".masterListFields"][] = "InsuranceNum";

$tdatacustomer[".inlineAddFields"] = array();
$tdatacustomer[".inlineAddFields"][] = "Cust_ID";
$tdatacustomer[".inlineAddFields"][] = "FirstName";
$tdatacustomer[".inlineAddFields"][] = "MiddleName";
$tdatacustomer[".inlineAddFields"][] = "LastName";
$tdatacustomer[".inlineAddFields"][] = "Status";
$tdatacustomer[".inlineAddFields"][] = "Gender";
$tdatacustomer[".inlineAddFields"][] = "DOB";
$tdatacustomer[".inlineAddFields"][] = "Email";
$tdatacustomer[".inlineAddFields"][] = "PhoneNum";
$tdatacustomer[".inlineAddFields"][] = "Discount_ID";
$tdatacustomer[".inlineAddFields"][] = "Address_ID";
$tdatacustomer[".inlineAddFields"][] = "LicenceNum";
$tdatacustomer[".inlineAddFields"][] = "InsuranceNum";

$tdatacustomer[".editFields"] = array();
$tdatacustomer[".editFields"][] = "Cust_ID";
$tdatacustomer[".editFields"][] = "FirstName";
$tdatacustomer[".editFields"][] = "MiddleName";
$tdatacustomer[".editFields"][] = "LastName";
$tdatacustomer[".editFields"][] = "Status";
$tdatacustomer[".editFields"][] = "Gender";
$tdatacustomer[".editFields"][] = "DOB";
$tdatacustomer[".editFields"][] = "Email";
$tdatacustomer[".editFields"][] = "PhoneNum";
$tdatacustomer[".editFields"][] = "Discount_ID";
$tdatacustomer[".editFields"][] = "Address_ID";
$tdatacustomer[".editFields"][] = "LicenceNum";
$tdatacustomer[".editFields"][] = "InsuranceNum";

$tdatacustomer[".inlineEditFields"] = array();
$tdatacustomer[".inlineEditFields"][] = "Cust_ID";
$tdatacustomer[".inlineEditFields"][] = "FirstName";
$tdatacustomer[".inlineEditFields"][] = "MiddleName";
$tdatacustomer[".inlineEditFields"][] = "LastName";
$tdatacustomer[".inlineEditFields"][] = "Status";
$tdatacustomer[".inlineEditFields"][] = "Gender";
$tdatacustomer[".inlineEditFields"][] = "DOB";
$tdatacustomer[".inlineEditFields"][] = "Email";
$tdatacustomer[".inlineEditFields"][] = "PhoneNum";
$tdatacustomer[".inlineEditFields"][] = "Discount_ID";
$tdatacustomer[".inlineEditFields"][] = "Address_ID";
$tdatacustomer[".inlineEditFields"][] = "LicenceNum";
$tdatacustomer[".inlineEditFields"][] = "InsuranceNum";

$tdatacustomer[".updateSelectedFields"] = array();
$tdatacustomer[".updateSelectedFields"][] = "Cust_ID";
$tdatacustomer[".updateSelectedFields"][] = "FirstName";
$tdatacustomer[".updateSelectedFields"][] = "MiddleName";
$tdatacustomer[".updateSelectedFields"][] = "LastName";
$tdatacustomer[".updateSelectedFields"][] = "Status";
$tdatacustomer[".updateSelectedFields"][] = "Gender";
$tdatacustomer[".updateSelectedFields"][] = "DOB";
$tdatacustomer[".updateSelectedFields"][] = "Email";
$tdatacustomer[".updateSelectedFields"][] = "PhoneNum";
$tdatacustomer[".updateSelectedFields"][] = "Discount_ID";
$tdatacustomer[".updateSelectedFields"][] = "Address_ID";
$tdatacustomer[".updateSelectedFields"][] = "LicenceNum";
$tdatacustomer[".updateSelectedFields"][] = "InsuranceNum";


$tdatacustomer[".exportFields"] = array();
$tdatacustomer[".exportFields"][] = "Cust_ID";
$tdatacustomer[".exportFields"][] = "FirstName";
$tdatacustomer[".exportFields"][] = "MiddleName";
$tdatacustomer[".exportFields"][] = "LastName";
$tdatacustomer[".exportFields"][] = "Status";
$tdatacustomer[".exportFields"][] = "Gender";
$tdatacustomer[".exportFields"][] = "DOB";
$tdatacustomer[".exportFields"][] = "Email";
$tdatacustomer[".exportFields"][] = "PhoneNum";
$tdatacustomer[".exportFields"][] = "Discount_ID";
$tdatacustomer[".exportFields"][] = "Address_ID";
$tdatacustomer[".exportFields"][] = "LicenceNum";
$tdatacustomer[".exportFields"][] = "InsuranceNum";

$tdatacustomer[".importFields"] = array();
$tdatacustomer[".importFields"][] = "Cust_ID";
$tdatacustomer[".importFields"][] = "FirstName";
$tdatacustomer[".importFields"][] = "MiddleName";
$tdatacustomer[".importFields"][] = "LastName";
$tdatacustomer[".importFields"][] = "Status";
$tdatacustomer[".importFields"][] = "Gender";
$tdatacustomer[".importFields"][] = "DOB";
$tdatacustomer[".importFields"][] = "Email";
$tdatacustomer[".importFields"][] = "PhoneNum";
$tdatacustomer[".importFields"][] = "Discount_ID";
$tdatacustomer[".importFields"][] = "Address_ID";
$tdatacustomer[".importFields"][] = "LicenceNum";
$tdatacustomer[".importFields"][] = "InsuranceNum";

$tdatacustomer[".printFields"] = array();
$tdatacustomer[".printFields"][] = "Cust_ID";
$tdatacustomer[".printFields"][] = "FirstName";
$tdatacustomer[".printFields"][] = "MiddleName";
$tdatacustomer[".printFields"][] = "LastName";
$tdatacustomer[".printFields"][] = "Status";
$tdatacustomer[".printFields"][] = "Gender";
$tdatacustomer[".printFields"][] = "DOB";
$tdatacustomer[".printFields"][] = "Email";
$tdatacustomer[".printFields"][] = "PhoneNum";
$tdatacustomer[".printFields"][] = "Discount_ID";
$tdatacustomer[".printFields"][] = "Address_ID";
$tdatacustomer[".printFields"][] = "LicenceNum";
$tdatacustomer[".printFields"][] = "InsuranceNum";


//	Cust_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Cust_ID";
	$fdata["GoodName"] = "Cust_ID";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","Cust_ID");
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




	$tdatacustomer["Cust_ID"] = $fdata;
//	FirstName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FirstName";
	$fdata["GoodName"] = "FirstName";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","FirstName");
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

		$fdata["strField"] = "FirstName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FirstName";

	
	
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
			$edata["EditParams"].= " maxlength=35";

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




	$tdatacustomer["FirstName"] = $fdata;
//	MiddleName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MiddleName";
	$fdata["GoodName"] = "MiddleName";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","MiddleName");
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

		$fdata["strField"] = "MiddleName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MiddleName";

	
	
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
			$edata["EditParams"].= " maxlength=35";

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




	$tdatacustomer["MiddleName"] = $fdata;
//	LastName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LastName";
	$fdata["GoodName"] = "LastName";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","LastName");
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

		$fdata["strField"] = "LastName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastName";

	
	
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
			$edata["EditParams"].= " maxlength=35";

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




	$tdatacustomer["LastName"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","Status");
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

		$fdata["strField"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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




	$tdatacustomer["Status"] = $fdata;
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","Gender");
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

		$fdata["strField"] = "Gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Gender";

	
	
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




	$tdatacustomer["Gender"] = $fdata;
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","DOB");
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

		$fdata["strField"] = "DOB";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOB";

	
	
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




	$tdatacustomer["DOB"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","Email");
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

		$fdata["strField"] = "Email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
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
			$edata["EditParams"].= " maxlength=35";

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




	$tdatacustomer["Email"] = $fdata;
//	PhoneNum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PhoneNum";
	$fdata["GoodName"] = "PhoneNum";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","PhoneNum");
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




	$tdatacustomer["PhoneNum"] = $fdata;
//	Discount_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Discount_ID";
	$fdata["GoodName"] = "Discount_ID";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","Discount_ID");
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




	$tdatacustomer["Discount_ID"] = $fdata;
//	Address_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Address_ID";
	$fdata["GoodName"] = "Address_ID";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","Address_ID");
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




	$tdatacustomer["Address_ID"] = $fdata;
//	LicenceNum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "LicenceNum";
	$fdata["GoodName"] = "LicenceNum";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","LicenceNum");
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

		$fdata["strField"] = "LicenceNum";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LicenceNum";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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




	$tdatacustomer["LicenceNum"] = $fdata;
//	InsuranceNum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "InsuranceNum";
	$fdata["GoodName"] = "InsuranceNum";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","InsuranceNum");
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

		$fdata["strField"] = "InsuranceNum";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InsuranceNum";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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




	$tdatacustomer["InsuranceNum"] = $fdata;


$tables_data["customer"]=&$tdatacustomer;
$field_labels["customer"] = &$fieldLabelscustomer;
$fieldToolTips["customer"] = &$fieldToolTipscustomer;
$placeHolders["customer"] = &$placeHolderscustomer;
$page_titles["customer"] = &$pageTitlescustomer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["customer"] = array();
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
		
	$detailsTablesData["customer"][$dIndex] = $detailsParam;

	
		$detailsTablesData["customer"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["masterKeys"][]="Cust_ID";

				$detailsTablesData["customer"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["detailKeys"][]="Cust_ID";
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
		
	$detailsTablesData["customer"][$dIndex] = $detailsParam;

	
		$detailsTablesData["customer"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["masterKeys"][]="Cust_ID";

				$detailsTablesData["customer"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["detailKeys"][]="Cust_ID";
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
		
	$detailsTablesData["customer"][$dIndex] = $detailsParam;

	
		$detailsTablesData["customer"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["masterKeys"][]="Cust_ID";

				$detailsTablesData["customer"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["detailKeys"][]="Cust_ID";

// tables which are master tables for current table (detail)
$masterTablesData["customer"] = array();


	
				$strOriginalDetailsTable="address";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="address";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "address";
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
					$masterTablesData["customer"][0] = $masterParams;
				$masterTablesData["customer"][0]["masterKeys"] = array();
	$masterTablesData["customer"][0]["masterKeys"][]="Address_ID";
				$masterTablesData["customer"][0]["detailKeys"] = array();
	$masterTablesData["customer"][0]["detailKeys"][]="Address_ID";
		
	
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
					$masterTablesData["customer"][1] = $masterParams;
				$masterTablesData["customer"][1]["masterKeys"] = array();
	$masterTablesData["customer"][1]["masterKeys"][]="Discount_ID";
				$masterTablesData["customer"][1]["detailKeys"] = array();
	$masterTablesData["customer"][1]["detailKeys"][]="Discount_ID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_customer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Cust_ID,  	FirstName,  	MiddleName,  	LastName,  	Status,  	Gender,  	DOB,  	Email,  	PhoneNum,  	Discount_ID,  	Address_ID,  	LicenceNum,  	InsuranceNum";
$proto0["m_strFrom"] = "FROM customer";
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
	"m_strName" => "Cust_ID",
	"m_strTable" => "customer",
	"m_srcTableName" => "customer"
));

$proto6["m_sql"] = "Cust_ID";
$proto6["m_srcTableName"] = "customer";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstName",
	"m_strTable" => "customer",
	"m_srcTableName" => "customer"
));

$proto8["m_sql"] = "FirstName";
$proto8["m_srcTableName"] = "customer";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MiddleName",
	"m_strTable" => "customer",
	"m_srcTableName" => "customer"
));

$proto10["m_sql"] = "MiddleName";
$proto10["m_srcTableName"] = "customer";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LastName",
	"m_strTable" => "customer",
	"m_srcTableName" => "customer"
));

$proto12["m_sql"] = "LastName";
$proto12["m_srcTableName"] = "customer";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "customer",
	"m_srcTableName" => "customer"
));

$proto14["m_sql"] = "Status";
$proto14["m_srcTableName"] = "customer";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "customer",
	"m_srcTableName" => "customer"
));

$proto16["m_sql"] = "Gender";
$proto16["m_srcTableName"] = "customer";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "customer",
	"m_srcTableName" => "customer"
));

$proto18["m_sql"] = "DOB";
$proto18["m_srcTableName"] = "customer";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "customer",
	"m_srcTableName" => "customer"
));

$proto20["m_sql"] = "Email";
$proto20["m_srcTableName"] = "customer";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PhoneNum",
	"m_strTable" => "customer",
	"m_srcTableName" => "customer"
));

$proto22["m_sql"] = "PhoneNum";
$proto22["m_srcTableName"] = "customer";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Discount_ID",
	"m_strTable" => "customer",
	"m_srcTableName" => "customer"
));

$proto24["m_sql"] = "Discount_ID";
$proto24["m_srcTableName"] = "customer";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Address_ID",
	"m_strTable" => "customer",
	"m_srcTableName" => "customer"
));

$proto26["m_sql"] = "Address_ID";
$proto26["m_srcTableName"] = "customer";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "LicenceNum",
	"m_strTable" => "customer",
	"m_srcTableName" => "customer"
));

$proto28["m_sql"] = "LicenceNum";
$proto28["m_srcTableName"] = "customer";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "InsuranceNum",
	"m_strTable" => "customer",
	"m_srcTableName" => "customer"
));

$proto30["m_sql"] = "InsuranceNum";
$proto30["m_srcTableName"] = "customer";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "customer";
$proto33["m_srcTableName"] = "customer";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "Cust_ID";
$proto33["m_columns"][] = "FirstName";
$proto33["m_columns"][] = "MiddleName";
$proto33["m_columns"][] = "LastName";
$proto33["m_columns"][] = "Status";
$proto33["m_columns"][] = "Gender";
$proto33["m_columns"][] = "DOB";
$proto33["m_columns"][] = "Email";
$proto33["m_columns"][] = "PhoneNum";
$proto33["m_columns"][] = "Discount_ID";
$proto33["m_columns"][] = "Address_ID";
$proto33["m_columns"][] = "LicenceNum";
$proto33["m_columns"][] = "InsuranceNum";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "customer";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "customer";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="customer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_customer = createSqlQuery_customer();


	
		;

													

$tdatacustomer[".sqlquery"] = $queryData_customer;

$tableEvents["customer"] = new eventsBase;
$tdatacustomer[".hasEvents"] = false;

?>