<?php
if(isset($_GET['id']) && $_GET['id'] != '')
{
include('../libs/subcategories.php');
include('../classes/ResizeImage.php');

$userid = $_COOKIE['userid'];

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 10;
$startResults = ($page - 1) * $resultsPerPage;
$noOfsubcategories = getnoOfSubCategories($_GET['id']);
$totalPages = ceil($noOfsubcategories / $resultsPerPage);

if(isset($_POST['savesubcategory']))
{
	unset($_POST['savesubcategory']);
	/*if(isset($_POST['oldimage']) && $_POST['oldimage'] != '')
	{
		unlink("../uploads/services/".$_POST['oldimage']);
		unlink("../uploads/services/thumbnail/".$_POST['oldimage']);
	}
	if(isset($_POST['oldid'])) $imagename = getTitleByID('subcategories',$_POST['oldid']);
	else $imagename = $_POST['title'];
	$image = upload_profile_picture($imagename);
	if($image)
	{*/
		if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateSubCategory($_POST['oldid'],$_POST['titleen'],$_POST['titlear'],$_POST['icon']);
		else insertSubCategory($_GET['id'],$_POST['titleen'],$_POST['titlear'],$_POST['icon']);
	/*}
	unset($image,$_FILES);*/
	header('location: subcategories.php?id='.$_GET['id']);
}
}
else header('location: categories.php');
?>