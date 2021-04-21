<?php
if(isset($_POST['id'],$_POST['pic']))
{	
	$id = $_POST['id'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("delete from offers where id = '$id'");
	if($stmt->execute())
	{
		unlink("../uploads/offers/".$_POST['pic']);
		unlink("../uploads/offers/thumbnail/".$_POST['pic']);
		echo 1;
	}
	include("../libs/closedb.php");
   exit;
}
?>