<?php
if(isset($_POST['client'],$_POST['image']))
{	
	$clientid = $_POST['client'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	if($_POST['image'] != '')
	{
		unlink("../uploads/clients/".$_POST['image']);
		unlink("../uploads/clients/thumbnail/".$_POST['image']);
	}
	$stmt = $dbh->prepare("delete from clients where id = '$clientid'");
	$stmt->execute();
	include("../libs/closedb.php");
   exit;
}
?>