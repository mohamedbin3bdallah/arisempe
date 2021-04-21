<?php
include('../libs/offers.php');
include('../classes/ResizeImage.php');
$userid = $_COOKIE['userid'];

if(isset($_GET['oldid']) && $_GET['oldid'] != '')
{
	$offer = getOfferByID($_GET['oldid']);
}

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 10;
$startResults = ($page - 1) * $resultsPerPage;
$noOfoffers = getnoOfOffers();
$totalPages = ceil($noOfoffers / $resultsPerPage);

if(isset($_POST['saveoffer']))
{
	unset($_POST['saveoffer']);
	if(isset($_POST['oldimage']) && $_POST['oldimage'] != '')
	{
		if(isset($_FILES['file']['error']) && $_FILES['file']['error'] == 0)
		{
			unlink("../uploads/offers/".$_POST['oldimage']);
			unlink("../uploads/offers/thumbnail/".$_POST['oldimage']);
			$image = upload_profile_picture();
		}
		else $image = $_POST['oldimage'];
	}
	else $image = upload_profile_picture();
	if($image)
	{
		if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateOffers($_POST['oldid'],$_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],$image);
		else insertOffers($_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],$image);
	}
	unset($image,$_FILES);
	header('location: offers.php');
}
?>