<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavehicle = array();
	$tdatavehicle[".truncateText"] = true;
	$tdatavehicle[".NumberOfChars"] = 80;
	$tdatavehicle[".ShortName"] = "vehicle";
	$tdatavehicle[".OwnerID"] = "";
	$tdatavehicle[".OriginalTable"] = "vehicle";

//	field labels
$fieldLabelsvehicle = array();
$fieldToolTipsvehicle = array();
$pageTitlesvehicle = array();
$placeHoldersvehicle = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvehicle["English"] = array();
	$fieldToolTipsvehicle["English"] = array();
	$placeHoldersvehicle["English"] = array();
	$pageTitlesvehicle["English"] = array();
	$fieldLabelsvehicle["English"]["VIN"] = "VIN";
	$fieldToolTipsvehicle["English"]["VIN"] = "";
	$placeHoldersvehicle["English"]["VIN"] = "";
	$fieldLabelsvehicle["English"]["Year"] = "Year";
	$fieldToolTipsvehicle["English"]["Year"] = "";
	$placeHoldersvehicle["English"]["Year"] = "";
	$fieldLabelsvehicle["English"]["Make"] = "Make";
	$fieldToolTipsvehicle["English"]["Make"] = "";
	$placeHoldersvehicle["English"]["Make"] = "";
	$fieldLabelsvehicle["English"]["Model"] = "Model";
	$fieldToolTipsvehicle["English"]["Model"] = "";
	$placeHoldersvehicle["English"]["Model"] = "";
	$fieldLabelsvehicle["English"]["Mileage"] = "Mileage";
	$fieldToolTipsvehicle["English"]["Mileage"] = "";
	$placeHoldersvehicle["English"]["Mileage"] = "";
	$fieldLabelsvehicle["English"]["Type"] = "Type";
	$fieldToolTipsvehicle["English"]["Type"] = "";
	$placeHoldersvehicle["English"]["Type"] = "";
	$fieldLabelsvehicle["English"]["DriveTrain"] = "Drive Train";
	$fieldToolTipsvehicle["English"]["DriveTrain"] = "";
	$placeHoldersvehicle["English"]["DriveTrain"] = "";
	$fieldLabelsvehicle["English"]["CostPerMile"] = "Cost Per Mile";
	$fieldToolTipsvehicle["English"]["CostPerMile"] = "";
	$placeHoldersvehicle["English"]["CostPerMile"] = "";
	$fieldLabelsvehicle["English"]["RegistrationNum"] = "Registration Num";
	$fieldToolTipsvehicle["English"]["RegistrationNum"] = "";
	$placeHoldersvehicle["English"]["RegistrationNum"] = "";
	if (count($fieldToolTipsvehicle["English"]))
		$tdatavehicle[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvehicle[""] = array();
	$fieldToolTipsvehicle[""] = array();
	$placeHoldersvehicle[""] = array();
	$pageTitlesvehicle[""] = array();
	if (count($fieldToolTipsvehicle[""]))
		$tdatavehicle[".isUseToolTips"] = true;
}


	$tdatavehicle[".NCSearch"] = true;



$tdatavehicle[".shortTableName"] = "vehicle";
$tdatavehicle[".nSecOptions"] = 0;
$tdatavehicle[".recsPerRowPrint"] = 1;
$tdatavehicle[".mainTableOwnerID"] = "";
$tdatavehicle[".moveNext"] = 1;
$tdatavehicle[".entityType"] = 0;

$tdatavehicle[".strOriginalTableName"] = "vehicle";

	



$tdatavehicle[".showAddInPopup"] = false;

$tdatavehicle[".showEditInPopup"] = false;

$tdatavehicle[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavehicle[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavehicle[".fieldsForRegister"] = array();

$tdatavehicle[".listAjax"] = false;

	$tdatavehicle[".audit"] = false;

	$tdatavehicle[".locking"] = false;

$tdatavehicle[".edit"] = true;
$tdatavehicle[".afterEditAction"] = 1;
$tdatavehicle[".closePopupAfterEdit"] = 1;
$tdatavehicle[".afterEditActionDetTable"] = "";

$tdatavehicle[".add"] = true;
$tdatavehicle[".afterAddAction"] = 1;
$tdatavehicle[".closePopupAfterAdd"] = 1;
$tdatavehicle[".afterAddActionDetTable"] = "";

$tdatavehicle[".list"] = true;



$tdatavehicle[".reorderRecordsByHeader"] = true;


$tdatavehicle[".exportFormatting"] = 2;
$tdatavehicle[".exportDelimiter"] = ",";
		
$tdatavehicle[".view"] = true;

$tdatavehicle[".import"] = true;

$tdatavehicle[".exportTo"] = true;

$tdatavehicle[".printFriendly"] = true;

$tdatavehicle[".delete"] = true;

$tdatavehicle[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavehicle[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavehicle[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavehicle[".searchSaving"] = false;
//

$tdatavehicle[".showSearchPanel"] = true;
		$tdatavehicle[".flexibleSearch"] = true;

$tdatavehicle[".isUseAjaxSuggest"] = true;

$tdatavehicle[".rowHighlite"] = true;





$tdatavehicle[".ajaxCodeSnippetAdded"] = false;

$tdatavehicle[".buttonsAdded"] = false;

$tdatavehicle[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavehicle[".isUseTimeForSearch"] = false;





$tdatavehicle[".allSearchFields"] = array();
$tdatavehicle[".filterFields"] = array();
$tdatavehicle[".requiredSearchFields"] = array();

$tdatavehicle[".allSearchFields"][] = "VIN";
	$tdatavehicle[".allSearchFields"][] = "Year";
	$tdatavehicle[".allSearchFields"][] = "Make";
	$tdatavehicle[".allSearchFields"][] = "Model";
	$tdatavehicle[".allSearchFields"][] = "Mileage";
	$tdatavehicle[".allSearchFields"][] = "Type";
	$tdatavehicle[".allSearchFields"][] = "DriveTrain";
	$tdatavehicle[".allSearchFields"][] = "CostPerMile";
	$tdatavehicle[".allSearchFields"][] = "RegistrationNum";
	

$tdatavehicle[".googleLikeFields"] = array();
$tdatavehicle[".googleLikeFields"][] = "VIN";
$tdatavehicle[".googleLikeFields"][] = "Year";
$tdatavehicle[".googleLikeFields"][] = "Make";
$tdatavehicle[".googleLikeFields"][] = "Model";
$tdatavehicle[".googleLikeFields"][] = "Mileage";
$tdatavehicle[".googleLikeFields"][] = "Type";
$tdatavehicle[".googleLikeFields"][] = "DriveTrain";
$tdatavehicle[".googleLikeFields"][] = "CostPerMile";
$tdatavehicle[".googleLikeFields"][] = "RegistrationNum";


$tdatavehicle[".advSearchFields"] = array();
$tdatavehicle[".advSearchFields"][] = "VIN";
$tdatavehicle[".advSearchFields"][] = "Year";
$tdatavehicle[".advSearchFields"][] = "Make";
$tdatavehicle[".advSearchFields"][] = "Model";
$tdatavehicle[".advSearchFields"][] = "Mileage";
$tdatavehicle[".advSearchFields"][] = "Type";
$tdatavehicle[".advSearchFields"][] = "DriveTrain";
$tdatavehicle[".advSearchFields"][] = "CostPerMile";
$tdatavehicle[".advSearchFields"][] = "RegistrationNum";

$tdatavehicle[".tableType"] = "list";

$tdatavehicle[".printerPageOrientation"] = 0;
$tdatavehicle[".nPrinterPageScale"] = 100;

$tdatavehicle[".nPrinterSplitRecords"] = 40;

$tdatavehicle[".nPrinterPDFSplitRecords"] = 40;



$tdatavehicle[".geocodingEnabled"] = false;





$tdatavehicle[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavehicle[".pageSize"] = 20;

$tdatavehicle[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavehicle[".strOrderBy"] = $tstrOrderBy;

$tdatavehicle[".orderindexes"] = array();

$tdatavehicle[".sqlHead"] = "SELECT VIN,  	`Year`,  	Make,  	Model,  	Mileage,  	`Type`,  	DriveTrain,  	CostPerMile,  	RegistrationNum";
$tdatavehicle[".sqlFrom"] = "FROM vehicle";
$tdatavehicle[".sqlWhereExpr"] = "";
$tdatavehicle[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavehicle[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavehicle[".arrGroupsPerPage"] = $arrGPP;

$tdatavehicle[".highlightSearchResults"] = true;

$tableKeysvehicle = array();
$tableKeysvehicle[] = "VIN";
$tdatavehicle[".Keys"] = $tableKeysvehicle;

$tdatavehicle[".listFields"] = array();
$tdatavehicle[".listFields"][] = "VIN";
$tdatavehicle[".listFields"][] = "Year";
$tdatavehicle[".listFields"][] = "Make";
$tdatavehicle[".listFields"][] = "Model";
$tdatavehicle[".listFields"][] = "Mileage";
$tdatavehicle[".listFields"][] = "Type";
$tdatavehicle[".listFields"][] = "DriveTrain";
$tdatavehicle[".listFields"][] = "CostPerMile";
$tdatavehicle[".listFields"][] = "RegistrationNum";

$tdatavehicle[".hideMobileList"] = array();


$tdatavehicle[".viewFields"] = array();
$tdatavehicle[".viewFields"][] = "VIN";
$tdatavehicle[".viewFields"][] = "Year";
$tdatavehicle[".viewFields"][] = "Make";
$tdatavehicle[".viewFields"][] = "Model";
$tdatavehicle[".viewFields"][] = "Mileage";
$tdatavehicle[".viewFields"][] = "Type";
$tdatavehicle[".viewFields"][] = "DriveTrain";
$tdatavehicle[".viewFields"][] = "CostPerMile";
$tdatavehicle[".viewFields"][] = "RegistrationNum";

$tdatavehicle[".addFields"] = array();
$tdatavehicle[".addFields"][] = "VIN";
$tdatavehicle[".addFields"][] = "Year";
$tdatavehicle[".addFields"][] = "Make";
$tdatavehicle[".addFields"][] = "Model";
$tdatavehicle[".addFields"][] = "Mileage";
$tdatavehicle[".addFields"][] = "Type";
$tdatavehicle[".addFields"][] = "DriveTrain";
$tdatavehicle[".addFields"][] = "CostPerMile";
$tdatavehicle[".addFields"][] = "RegistrationNum";

$tdatavehicle[".masterListFields"] = array();
$tdatavehicle[".masterListFields"][] = "VIN";
$tdatavehicle[".masterListFields"][] = "Year";
$tdatavehicle[".masterListFields"][] = "Make";
$tdatavehicle[".masterListFields"][] = "Model";
$tdatavehicle[".masterListFields"][] = "Mileage";
$tdatavehicle[".masterListFields"][] = "Type";
$tdatavehicle[".masterListFields"][] = "DriveTrain";
$tdatavehicle[".masterListFields"][] = "CostPerMile";
$tdatavehicle[".masterListFields"][] = "RegistrationNum";

$tdatavehicle[".inlineAddFields"] = array();
$tdatavehicle[".inlineAddFields"][] = "VIN";
$tdatavehicle[".inlineAddFields"][] = "Year";
$tdatavehicle[".inlineAddFields"][] = "Make";
$tdatavehicle[".inlineAddFields"][] = "Model";
$tdatavehicle[".inlineAddFields"][] = "Mileage";
$tdatavehicle[".inlineAddFields"][] = "Type";
$tdatavehicle[".inlineAddFields"][] = "DriveTrain";
$tdatavehicle[".inlineAddFields"][] = "CostPerMile";
$tdatavehicle[".inlineAddFields"][] = "RegistrationNum";

$tdatavehicle[".editFields"] = array();
$tdatavehicle[".editFields"][] = "VIN";
$tdatavehicle[".editFields"][] = "Year";
$tdatavehicle[".editFields"][] = "Make";
$tdatavehicle[".editFields"][] = "Model";
$tdatavehicle[".editFields"][] = "Mileage";
$tdatavehicle[".editFields"][] = "Type";
$tdatavehicle[".editFields"][] = "DriveTrain";
$tdatavehicle[".editFields"][] = "CostPerMile";
$tdatavehicle[".editFields"][] = "RegistrationNum";

$tdatavehicle[".inlineEditFields"] = array();
$tdatavehicle[".inlineEditFields"][] = "VIN";
$tdatavehicle[".inlineEditFields"][] = "Year";
$tdatavehicle[".inlineEditFields"][] = "Make";
$tdatavehicle[".inlineEditFields"][] = "Model";
$tdatavehicle[".inlineEditFields"][] = "Mileage";
$tdatavehicle[".inlineEditFields"][] = "Type";
$tdatavehicle[".inlineEditFields"][] = "DriveTrain";
$tdatavehicle[".inlineEditFields"][] = "CostPerMile";
$tdatavehicle[".inlineEditFields"][] = "RegistrationNum";

$tdatavehicle[".updateSelectedFields"] = array();
$tdatavehicle[".updateSelectedFields"][] = "VIN";
$tdatavehicle[".updateSelectedFields"][] = "Year";
$tdatavehicle[".updateSelectedFields"][] = "Make";
$tdatavehicle[".updateSelectedFields"][] = "Model";
$tdatavehicle[".updateSelectedFields"][] = "Mileage";
$tdatavehicle[".updateSelectedFields"][] = "Type";
$tdatavehicle[".updateSelectedFields"][] = "DriveTrain";
$tdatavehicle[".updateSelectedFields"][] = "CostPerMile";
$tdatavehicle[".updateSelectedFields"][] = "RegistrationNum";


$tdatavehicle[".exportFields"] = array();
$tdatavehicle[".exportFields"][] = "VIN";
$tdatavehicle[".exportFields"][] = "Year";
$tdatavehicle[".exportFields"][] = "Make";
$tdatavehicle[".exportFields"][] = "Model";
$tdatavehicle[".exportFields"][] = "Mileage";
$tdatavehicle[".exportFields"][] = "Type";
$tdatavehicle[".exportFields"][] = "DriveTrain";
$tdatavehicle[".exportFields"][] = "CostPerMile";
$tdatavehicle[".exportFields"][] = "RegistrationNum";

$tdatavehicle[".importFields"] = array();
$tdatavehicle[".importFields"][] = "VIN";
$tdatavehicle[".importFields"][] = "Year";
$tdatavehicle[".importFields"][] = "Make";
$tdatavehicle[".importFields"][] = "Model";
$tdatavehicle[".importFields"][] = "Mileage";
$tdatavehicle[".importFields"][] = "Type";
$tdatavehicle[".importFields"][] = "DriveTrain";
$tdatavehicle[".importFields"][] = "CostPerMile";
$tdatavehicle[".importFields"][] = "RegistrationNum";

$tdatavehicle[".printFields"] = array();
$tdatavehicle[".printFields"][] = "VIN";
$tdatavehicle[".printFields"][] = "Year";
$tdatavehicle[".printFields"][] = "Make";
$tdatavehicle[".printFields"][] = "Model";
$tdatavehicle[".printFields"][] = "Mileage";
$tdatavehicle[".printFields"][] = "Type";
$tdatavehicle[".printFields"][] = "DriveTrain";
$tdatavehicle[".printFields"][] = "CostPerMile";
$tdatavehicle[".printFields"][] = "RegistrationNum";


//	VIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VIN";
	$fdata["GoodName"] = "VIN";
	$fdata["ownerTable"] = "vehicle";
	$fdata["Label"] = GetFieldLabel("vehicle","VIN");
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=17";

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




	$tdatavehicle["VIN"] = $fdata;
//	Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Year";
	$fdata["GoodName"] = "Year";
	$fdata["ownerTable"] = "vehicle";
	$fdata["Label"] = GetFieldLabel("vehicle","Year");
	$fdata["FieldType"] = 7;

	
	
	
			
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

		$fdata["strField"] = "Year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Year`";

	
	
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




	$tdatavehicle["Year"] = $fdata;
//	Make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Make";
	$fdata["GoodName"] = "Make";
	$fdata["ownerTable"] = "vehicle";
	$fdata["Label"] = GetFieldLabel("vehicle","Make");
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

		$fdata["strField"] = "Make";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Make";

	
	
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




	$tdatavehicle["Make"] = $fdata;
//	Model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Model";
	$fdata["GoodName"] = "Model";
	$fdata["ownerTable"] = "vehicle";
	$fdata["Label"] = GetFieldLabel("vehicle","Model");
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

		$fdata["strField"] = "Model";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Model";

	
	
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




	$tdatavehicle["Model"] = $fdata;
//	Mileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Mileage";
	$fdata["GoodName"] = "Mileage";
	$fdata["ownerTable"] = "vehicle";
	$fdata["Label"] = GetFieldLabel("vehicle","Mileage");
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

		$fdata["strField"] = "Mileage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mileage";

	
	
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




	$tdatavehicle["Mileage"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "vehicle";
	$fdata["Label"] = GetFieldLabel("vehicle","Type");
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

		$fdata["strField"] = "Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Type`";

	
	
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




	$tdatavehicle["Type"] = $fdata;
//	DriveTrain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DriveTrain";
	$fdata["GoodName"] = "DriveTrain";
	$fdata["ownerTable"] = "vehicle";
	$fdata["Label"] = GetFieldLabel("vehicle","DriveTrain");
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

		$fdata["strField"] = "DriveTrain";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DriveTrain";

	
	
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




	$tdatavehicle["DriveTrain"] = $fdata;
//	CostPerMile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CostPerMile";
	$fdata["GoodName"] = "CostPerMile";
	$fdata["ownerTable"] = "vehicle";
	$fdata["Label"] = GetFieldLabel("vehicle","CostPerMile");
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

		$fdata["strField"] = "CostPerMile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CostPerMile";

	
	
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




	$tdatavehicle["CostPerMile"] = $fdata;
//	RegistrationNum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "RegistrationNum";
	$fdata["GoodName"] = "RegistrationNum";
	$fdata["ownerTable"] = "vehicle";
	$fdata["Label"] = GetFieldLabel("vehicle","RegistrationNum");
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

		$fdata["strField"] = "RegistrationNum";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegistrationNum";

	
	
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




	$tdatavehicle["RegistrationNum"] = $fdata;


$tables_data["vehicle"]=&$tdatavehicle;
$field_labels["vehicle"] = &$fieldLabelsvehicle;
$fieldToolTips["vehicle"] = &$fieldToolTipsvehicle;
$placeHolders["vehicle"] = &$placeHoldersvehicle;
$page_titles["vehicle"] = &$pageTitlesvehicle;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vehicle"] = array();
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
		
	$detailsTablesData["vehicle"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vehicle"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vehicle"][$dIndex]["masterKeys"][]="VIN";

				$detailsTablesData["vehicle"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vehicle"][$dIndex]["detailKeys"][]="VIN";
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
		
	$detailsTablesData["vehicle"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vehicle"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vehicle"][$dIndex]["masterKeys"][]="VIN";

				$detailsTablesData["vehicle"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vehicle"][$dIndex]["detailKeys"][]="VIN";

// tables which are master tables for current table (detail)
$masterTablesData["vehicle"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vehicle()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "VIN,  	`Year`,  	Make,  	Model,  	Mileage,  	`Type`,  	DriveTrain,  	CostPerMile,  	RegistrationNum";
$proto0["m_strFrom"] = "FROM vehicle";
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
	"m_strTable" => "vehicle",
	"m_srcTableName" => "vehicle"
));

$proto6["m_sql"] = "VIN";
$proto6["m_srcTableName"] = "vehicle";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Year",
	"m_strTable" => "vehicle",
	"m_srcTableName" => "vehicle"
));

$proto8["m_sql"] = "`Year`";
$proto8["m_srcTableName"] = "vehicle";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehicle",
	"m_srcTableName" => "vehicle"
));

$proto10["m_sql"] = "Make";
$proto10["m_srcTableName"] = "vehicle";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehicle",
	"m_srcTableName" => "vehicle"
));

$proto12["m_sql"] = "Model";
$proto12["m_srcTableName"] = "vehicle";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Mileage",
	"m_strTable" => "vehicle",
	"m_srcTableName" => "vehicle"
));

$proto14["m_sql"] = "Mileage";
$proto14["m_srcTableName"] = "vehicle";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehicle",
	"m_srcTableName" => "vehicle"
));

$proto16["m_sql"] = "`Type`";
$proto16["m_srcTableName"] = "vehicle";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DriveTrain",
	"m_strTable" => "vehicle",
	"m_srcTableName" => "vehicle"
));

$proto18["m_sql"] = "DriveTrain";
$proto18["m_srcTableName"] = "vehicle";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CostPerMile",
	"m_strTable" => "vehicle",
	"m_srcTableName" => "vehicle"
));

$proto20["m_sql"] = "CostPerMile";
$proto20["m_srcTableName"] = "vehicle";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "RegistrationNum",
	"m_strTable" => "vehicle",
	"m_srcTableName" => "vehicle"
));

$proto22["m_sql"] = "RegistrationNum";
$proto22["m_srcTableName"] = "vehicle";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "vehicle";
$proto25["m_srcTableName"] = "vehicle";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "VIN";
$proto25["m_columns"][] = "Year";
$proto25["m_columns"][] = "Make";
$proto25["m_columns"][] = "Model";
$proto25["m_columns"][] = "Mileage";
$proto25["m_columns"][] = "Type";
$proto25["m_columns"][] = "DriveTrain";
$proto25["m_columns"][] = "CostPerMile";
$proto25["m_columns"][] = "RegistrationNum";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "vehicle";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "vehicle";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vehicle";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vehicle = createSqlQuery_vehicle();


	
		;

									

$tdatavehicle[".sqlquery"] = $queryData_vehicle;

$tableEvents["vehicle"] = new eventsBase;
$tdatavehicle[".hasEvents"] = false;

?>