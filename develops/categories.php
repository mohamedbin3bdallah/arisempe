<?php
include('../libs/categories.php');
include('../classes/ResizeImage.php');

$userid = $_COOKIE['userid'];

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 10;
$startResults = ($page - 1) * $resultsPerPage;
$noOfcategories = getnoOfCategories();
$totalPages = ceil($noOfcategories / $resultsPerPage);

if(isset($_POST['savecategory']))
{
	unset($_POST['savecategory']);
	if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateCategory($_POST['oldid'],$_POST['titleen'],$_POST['titlear']);
	else insertCategory($_POST['titleen'],$_POST['titlear']);
	
	header('location: categories.php');
}
?>