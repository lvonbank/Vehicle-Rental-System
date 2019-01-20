<?php
require_once(getabspath("classes/cipherer.php"));




$tdataaddress = array();
	$tdataaddress[".truncateText"] = true;
	$tdataaddress[".NumberOfChars"] = 80;
	$tdataaddress[".ShortName"] = "address";
	$tdataaddress[".OwnerID"] = "";
	$tdataaddress[".OriginalTable"] = "address";

//	field labels
$fieldLabelsaddress = array();
$fieldToolTipsaddress = array();
$pageTitlesaddress = array();
$placeHoldersaddress = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaddress["English"] = array();
	$fieldToolTipsaddress["English"] = array();
	$placeHoldersaddress["English"] = array();
	$pageTitlesaddress["English"] = array();
	$fieldLabelsaddress["English"]["Address_ID"] = "Address ID";
	$fieldToolTipsaddress["English"]["Address_ID"] = "";
	$placeHoldersaddress["English"]["Address_ID"] = "";
	$fieldLabelsaddress["English"]["Street"] = "Street";
	$fieldToolTipsaddress["English"]["Street"] = "";
	$placeHoldersaddress["English"]["Street"] = "";
	$fieldLabelsaddress["English"]["City"] = "City";
	$fieldToolTipsaddress["English"]["City"] = "";
	$placeHoldersaddress["English"]["City"] = "";
	$fieldLabelsaddress["English"]["Region"] = "Region";
	$fieldToolTipsaddress["English"]["Region"] = "";
	$placeHoldersaddress["English"]["Region"] = "";
	$fieldLabelsaddress["English"]["Country"] = "Country";
	$fieldToolTipsaddress["English"]["Country"] = "";
	$placeHoldersaddress["English"]["Country"] = "";
	$fieldLabelsaddress["English"]["Zip"] = "Zip";
	$fieldToolTipsaddress["English"]["Zip"] = "";
	$placeHoldersaddress["English"]["Zip"] = "";
	if (count($fieldToolTipsaddress["English"]))
		$tdataaddress[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsaddress[""] = array();
	$fieldToolTipsaddress[""] = array();
	$placeHoldersaddress[""] = array();
	$pageTitlesaddress[""] = array();
	if (count($fieldToolTipsaddress[""]))
		$tdataaddress[".isUseToolTips"] = true;
}


	$tdataaddress[".NCSearch"] = true;



$tdataaddress[".shortTableName"] = "address";
$tdataaddress[".nSecOptions"] = 0;
$tdataaddress[".recsPerRowPrint"] = 1;
$tdataaddress[".mainTableOwnerID"] = "";
$tdataaddress[".moveNext"] = 1;
$tdataaddress[".entityType"] = 0;

$tdataaddress[".strOriginalTableName"] = "address";

	



$tdataaddress[".showAddInPopup"] = false;

$tdataaddress[".showEditInPopup"] = false;

$tdataaddress[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataaddress[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataaddress[".fieldsForRegister"] = array();

$tdataaddress[".listAjax"] = false;

	$tdataaddress[".audit"] = false;

	$tdataaddress[".locking"] = false;

$tdataaddress[".edit"] = true;
$tdataaddress[".afterEditAction"] = 1;
$tdataaddress[".closePopupAfterEdit"] = 1;
$tdataaddress[".afterEditActionDetTable"] = "";

$tdataaddress[".add"] = true;
$tdataaddress[".afterAddAction"] = 1;
$tdataaddress[".closePopupAfterAdd"] = 1;
$tdataaddress[".afterAddActionDetTable"] = "";

$tdataaddress[".list"] = true;



$tdataaddress[".reorderRecordsByHeader"] = true;


$tdataaddress[".exportFormatting"] = 2;
$tdataaddress[".exportDelimiter"] = ",";
		
$tdataaddress[".view"] = true;

$tdataaddress[".import"] = true;

$tdataaddress[".exportTo"] = true;

$tdataaddress[".printFriendly"] = true;

$tdataaddress[".delete"] = true;

$tdataaddress[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataaddress[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataaddress[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataaddress[".searchSaving"] = false;
//

$tdataaddress[".showSearchPanel"] = true;
		$tdataaddress[".flexibleSearch"] = true;

$tdataaddress[".isUseAjaxSuggest"] = true;

$tdataaddress[".rowHighlite"] = true;





$tdataaddress[".ajaxCodeSnippetAdded"] = false;

$tdataaddress[".buttonsAdded"] = false;

$tdataaddress[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaddress[".isUseTimeForSearch"] = false;



$tdataaddress[".badgeColor"] = "4682B4";


$tdataaddress[".allSearchFields"] = array();
$tdataaddress[".filterFields"] = array();
$tdataaddress[".requiredSearchFields"] = array();

$tdataaddress[".allSearchFields"][] = "Address_ID";
	$tdataaddress[".allSearchFields"][] = "Street";
	$tdataaddress[".allSearchFields"][] = "City";
	$tdataaddress[".allSearchFields"][] = "Region";
	$tdataaddress[".allSearchFields"][] = "Country";
	$tdataaddress[".allSearchFields"][] = "Zip";
	

$tdataaddress[".googleLikeFields"] = array();
$tdataaddress[".googleLikeFields"][] = "Address_ID";
$tdataaddress[".googleLikeFields"][] = "Street";
$tdataaddress[".googleLikeFields"][] = "City";
$tdataaddress[".googleLikeFields"][] = "Region";
$tdataaddress[".googleLikeFields"][] = "Country";
$tdataaddress[".googleLikeFields"][] = "Zip";


$tdataaddress[".advSearchFields"] = array();
$tdataaddress[".advSearchFields"][] = "Address_ID";
$tdataaddress[".advSearchFields"][] = "Street";
$tdataaddress[".advSearchFields"][] = "City";
$tdataaddress[".advSearchFields"][] = "Region";
$tdataaddress[".advSearchFields"][] = "Country";
$tdataaddress[".advSearchFields"][] = "Zip";

$tdataaddress[".tableType"] = "list";

$tdataaddress[".printerPageOrientation"] = 0;
$tdataaddress[".nPrinterPageScale"] = 100;

$tdataaddress[".nPrinterSplitRecords"] = 40;

$tdataaddress[".nPrinterPDFSplitRecords"] = 40;



$tdataaddress[".geocodingEnabled"] = false;





$tdataaddress[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataaddress[".pageSize"] = 20;

$tdataaddress[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaddress[".strOrderBy"] = $tstrOrderBy;

$tdataaddress[".orderindexes"] = array();

$tdataaddress[".sqlHead"] = "SELECT Address_ID,  	Street,  	City,  	Region,  	Country,  	Zip";
$tdataaddress[".sqlFrom"] = "FROM address";
$tdataaddress[".sqlWhereExpr"] = "";
$tdataaddress[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaddress[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaddress[".arrGroupsPerPage"] = $arrGPP;

$tdataaddress[".highlightSearchResults"] = true;

$tableKeysaddress = array();
$tableKeysaddress[] = "Address_ID";
$tdataaddress[".Keys"] = $tableKeysaddress;

$tdataaddress[".listFields"] = array();
$tdataaddress[".listFields"][] = "Address_ID";
$tdataaddress[".listFields"][] = "Street";
$tdataaddress[".listFields"][] = "City";
$tdataaddress[".listFields"][] = "Region";
$tdataaddress[".listFields"][] = "Country";
$tdataaddress[".listFields"][] = "Zip";

$tdataaddress[".hideMobileList"] = array();


$tdataaddress[".viewFields"] = array();
$tdataaddress[".viewFields"][] = "Address_ID";
$tdataaddress[".viewFields"][] = "Street";
$tdataaddress[".viewFields"][] = "City";
$tdataaddress[".viewFields"][] = "Region";
$tdataaddress[".viewFields"][] = "Country";
$tdataaddress[".viewFields"][] = "Zip";

$tdataaddress[".addFields"] = array();
$tdataaddress[".addFields"][] = "Address_ID";
$tdataaddress[".addFields"][] = "Street";
$tdataaddress[".addFields"][] = "City";
$tdataaddress[".addFields"][] = "Region";
$tdataaddress[".addFields"][] = "Country";
$tdataaddress[".addFields"][] = "Zip";

$tdataaddress[".masterListFields"] = array();
$tdataaddress[".masterListFields"][] = "Address_ID";
$tdataaddress[".masterListFields"][] = "Street";
$tdataaddress[".masterListFields"][] = "City";
$tdataaddress[".masterListFields"][] = "Region";
$tdataaddress[".masterListFields"][] = "Country";
$tdataaddress[".masterListFields"][] = "Zip";

$tdataaddress[".inlineAddFields"] = array();

$tdataaddress[".editFields"] = array();
$tdataaddress[".editFields"][] = "Address_ID";
$tdataaddress[".editFields"][] = "Street";
$tdataaddress[".editFields"][] = "City";
$tdataaddress[".editFields"][] = "Region";
$tdataaddress[".editFields"][] = "Country";
$tdataaddress[".editFields"][] = "Zip";

$tdataaddress[".inlineEditFields"] = array();

$tdataaddress[".updateSelectedFields"] = array();
$tdataaddress[".updateSelectedFields"][] = "Address_ID";
$tdataaddress[".updateSelectedFields"][] = "Street";
$tdataaddress[".updateSelectedFields"][] = "City";
$tdataaddress[".updateSelectedFields"][] = "Region";
$tdataaddress[".updateSelectedFields"][] = "Country";
$tdataaddress[".updateSelectedFields"][] = "Zip";


$tdataaddress[".exportFields"] = array();
$tdataaddress[".exportFields"][] = "Address_ID";
$tdataaddress[".exportFields"][] = "Street";
$tdataaddress[".exportFields"][] = "City";
$tdataaddress[".exportFields"][] = "Region";
$tdataaddress[".exportFields"][] = "Country";
$tdataaddress[".exportFields"][] = "Zip";

$tdataaddress[".importFields"] = array();
$tdataaddress[".importFields"][] = "Address_ID";
$tdataaddress[".importFields"][] = "Street";
$tdataaddress[".importFields"][] = "City";
$tdataaddress[".importFields"][] = "Region";
$tdataaddress[".importFields"][] = "Country";
$tdataaddress[".importFields"][] = "Zip";

$tdataaddress[".printFields"] = array();
$tdataaddress[".printFields"][] = "Address_ID";
$tdataaddress[".printFields"][] = "Street";
$tdataaddress[".printFields"][] = "City";
$tdataaddress[".printFields"][] = "Region";
$tdataaddress[".printFields"][] = "Country";
$tdataaddress[".printFields"][] = "Zip";


//	Address_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Address_ID";
	$fdata["GoodName"] = "Address_ID";
	$fdata["ownerTable"] = "address";
	$fdata["Label"] = GetFieldLabel("address","Address_ID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataaddress["Address_ID"] = $fdata;
//	Street
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Street";
	$fdata["GoodName"] = "Street";
	$fdata["ownerTable"] = "address";
	$fdata["Label"] = GetFieldLabel("address","Street");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Street";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Street";

	
	
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




	$tdataaddress["Street"] = $fdata;
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "address";
	$fdata["Label"] = GetFieldLabel("address","City");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "City";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "City";

	
	
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




	$tdataaddress["City"] = $fdata;
//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "address";
	$fdata["Label"] = GetFieldLabel("address","Region");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Region";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Region";

	
	
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




	$tdataaddress["Region"] = $fdata;
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "address";
	$fdata["Label"] = GetFieldLabel("address","Country");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Country";

	
	
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




	$tdataaddress["Country"] = $fdata;
//	Zip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Zip";
	$fdata["GoodName"] = "Zip";
	$fdata["ownerTable"] = "address";
	$fdata["Label"] = GetFieldLabel("address","Zip");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Zip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Zip";

	
	
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




	$tdataaddress["Zip"] = $fdata;


$tables_data["address"]=&$tdataaddress;
$field_labels["address"] = &$fieldLabelsaddress;
$fieldToolTips["address"] = &$fieldToolTipsaddress;
$placeHolders["address"] = &$placeHoldersaddress;
$page_titles["address"] = &$pageTitlesaddress;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["address"] = array();
//	customer
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="customer";
		$detailsParam["dOriginalTable"] = "customer";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "customer";
	$detailsParam["dCaptionTable"] = GetTableCaption("customer");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["address"][$dIndex] = $detailsParam;

	
		$detailsTablesData["address"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["address"][$dIndex]["masterKeys"][]="Address_ID";

				$detailsTablesData["address"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["address"][$dIndex]["detailKeys"][]="Address_ID";
//	location
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="location";
		$detailsParam["dOriginalTable"] = "location";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "location";
	$detailsParam["dCaptionTable"] = GetTableCaption("location");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["address"][$dIndex] = $detailsParam;

	
		$detailsTablesData["address"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["address"][$dIndex]["masterKeys"][]="Address_ID";

				$detailsTablesData["address"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["address"][$dIndex]["detailKeys"][]="Address_ID";

// tables which are master tables for current table (detail)
$masterTablesData["address"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_address()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Address_ID,  	Street,  	City,  	Region,  	Country,  	Zip";
$proto0["m_strFrom"] = "FROM address";
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
	"m_strName" => "Address_ID",
	"m_strTable" => "address",
	"m_srcTableName" => "address"
));

$proto6["m_sql"] = "Address_ID";
$proto6["m_srcTableName"] = "address";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Street",
	"m_strTable" => "address",
	"m_srcTableName" => "address"
));

$proto8["m_sql"] = "Street";
$proto8["m_srcTableName"] = "address";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "address",
	"m_srcTableName" => "address"
));

$proto10["m_sql"] = "City";
$proto10["m_srcTableName"] = "address";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Region",
	"m_strTable" => "address",
	"m_srcTableName" => "address"
));

$proto12["m_sql"] = "Region";
$proto12["m_srcTableName"] = "address";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Country",
	"m_strTable" => "address",
	"m_srcTableName" => "address"
));

$proto14["m_sql"] = "Country";
$proto14["m_srcTableName"] = "address";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Zip",
	"m_strTable" => "address",
	"m_srcTableName" => "address"
));

$proto16["m_sql"] = "Zip";
$proto16["m_srcTableName"] = "address";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "address";
$proto19["m_srcTableName"] = "address";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Address_ID";
$proto19["m_columns"][] = "Street";
$proto19["m_columns"][] = "City";
$proto19["m_columns"][] = "Region";
$proto19["m_columns"][] = "Country";
$proto19["m_columns"][] = "Zip";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "address";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "address";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="address";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_address = createSqlQuery_address();


	
		;

						

$tdataaddress[".sqlquery"] = $queryData_address;

$tableEvents["address"] = new eventsBase;
$tdataaddress[".hasEvents"] = false;

?>