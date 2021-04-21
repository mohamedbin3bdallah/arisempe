<?php
include('../libs/testimonials.php');
include('../classes/ResizeImage.php');

$userid = $_COOKIE['userid'];

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 10;
$startResults = ($page - 1) * $resultsPerPage;
$noOfTestimonials = getnoOfTestimonials();
$totalPages = ceil($noOfTestimonials / $resultsPerPage);

if(isset($_POST['savetestimonial']))
{
	unset($_POST['savetestimonial']);
	if($_POST['oldimage'] != '')
	{
		unlink("../uploads/testimonials/".$_POST['oldimage']);
		unlink("../uploads/testimonials/thumbnail/".$_POST['oldimage']);
	}
	$image = upload_profile_picture();
	if($image)
	{
		if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateTestimonial($_POST['oldid'],$_POST['body'],$_POST['name'],$_POST['job'],$_POST['company'],$_POST['website'],$image);
		else insertTestimonial($_POST['body'],$_POST['name'],$_POST['job'],$_POST['company'],$_POST['website'],$image);
	}
	unset($image,$_FILES);
	header('location: testimonials.php');
	
}
?>
