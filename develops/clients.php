<?php

include('../libs/clients.php');
include('../classes/ResizeImage.php');

$userid = $_COOKIE['userid'];

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 10;
$startResults = ($page - 1) * $resultsPerPage;
$noOfclients = getnoOfClients();
$totalPages = ceil($noOfclients / $resultsPerPage);

if(isset($_POST['saveclient']))
{
	unset($_POST['saveclient']);
	if(isset($_POST['oldimage']) && $_POST['oldimage'] != '')
	{
		if(isset($_FILES['file']['error']) && $_FILES['file']['error'] == 0)
		{
			unlink("../uploads/clients/".$_POST['oldimage']);
			unlink("../uploads/clients/thumbnail/".$_POST['oldimage']);
			$image = upload_profile_picture();
		}
		else $image = $_POST['oldimage'];
	}
	else $image = upload_profile_picture();
	if($image)
	{
		if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateClients($_POST['oldid'],$_POST['title'],$image);
		else insertClients($_POST['title'],$image);
	}
	unset($image,$_FILES);
	header('location: clients.php');
}
?>