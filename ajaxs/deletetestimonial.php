<?php
if(isset($_POST['testimonial'],$_POST['image']))
{	
	$testimonialid = $_POST['testimonial'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	if($_POST['image'] != '')
	{
		unlink("../uploads/testimonials/".$_POST['image']);
		unlink("../uploads/testimonials/thumbnail/".$_POST['image']);
	}
	$stmt = $dbh->prepare("delete from testimonials where id = '$testimonialid'");
	$stmt->execute();
	include("../libs/closedb.php");
   exit;
}
?>