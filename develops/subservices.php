<?php
if(isset($_GET['id']) && $_GET['id'] != '')
{
include('../libs/subservices.php');
include('../classes/ResizeImage.php');

$userid = $_COOKIE['userid'];

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 10;
$startResults = ($page - 1) * $resultsPerPage;
$noOfsubservices = getnoOfSubServices($_GET['id']);
$totalPages = ceil($noOfsubservices / $resultsPerPage);

if(isset($_POST['savesubservice']))
{
	unset($_POST['savesubservice']);
	if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateSubServices($_POST['oldid'],$_POST['titleen'],$_POST['titlear']);
	else
	{
		insertSubServices($_GET['id'],$_POST['titleen'],$_POST['titlear']);
		updateServicesChild($_GET['id']);
	}
	header('location: subservices.php?id='.$_GET['id']);
}
}
else header('location: categories.php');
?>