<?php
include('../libs/homepage.php');
$userid = $_COOKIE['userid'];
include('../classes/ResizeImage.php');
if(!empty($_FILES['file']['name']) && $_FILES['file']['error'] == 0)
{
	if($_POST['oldimage'] != '')
	{
		unlink("../uploads/carousel/".$_POST['oldimage']);
		unlink("../uploads/carousel/thumbnail/".$_POST['oldimage']);
		$imagename = pathinfo($_POST['oldimage'], PATHINFO_FILENAME);
	}	
	$image = upload_profile_picture($imagename);
	if($image) updateCarousel($_POST['oldid'],$image);
	unset($image,$_FILES);
	header('location: '.$_SERVER['REQUEST_URI']);
}
?>