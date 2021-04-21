<?php

include('../libs/ourteam.php');
include('../classes/ResizeImage.php');
$userid = $_COOKIE['userid'];

if(isset($_GET['oldid']) && $_GET['oldid'] != '')
{
	$team = getOurTeamByID($_GET['oldid']);
}

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 10;
$startResults = ($page - 1) * $resultsPerPage;
$noOfourteam = getnoOfOurTeam();
$totalPages = ceil($noOfourteam / $resultsPerPage);

if(isset($_POST['saveourteam']))
{
	unset($_POST['saveourteam']);
	if(isset($_POST['oldimage']) && $_POST['oldimage'] != '')
	{
		if(isset($_FILES['file']['error']) && $_FILES['file']['error'] == 0)
		{
			unlink("../uploads/ourteam/".$_POST['oldimage']);
			unlink("../uploads/ourteam/thumbnail/".$_POST['oldimage']);
			$image = upload_profile_picture();
		}
		else $image = $_POST['oldimage'];
	}
	else $image = upload_profile_picture();
	if($image)
	{
		if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateOurTeam($_POST['oldid'],$_POST['nameen'],$_POST['namear'],$_POST['jobtitleen'],$_POST['jobtitlear'],$_POST['descriptionen'],$_POST['descriptionar'],$image);
		else insertOurTeam($_POST['nameen'],$_POST['namear'],$_POST['jobtitleen'],$_POST['jobtitlear'],$_POST['descriptionen'],$_POST['descriptionar'],$image);
	}
	unset($image,$_FILES);
	header('location: ourteam.php');
}
?>