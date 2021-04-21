<?php
if(isset($_POST['category']))
{	
	$categoryid = $_POST['category'];
	/*if($_POST['image'] != '')
	{
		unlink("../uploads/services/".$_POST['image']);
		unlink("../uploads/services/thumbnail/".$_POST['image']);
	}*/
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select count(*) as count from subcategories where categoryid = '$categoryid'");
	$row = $result->fetch();
	if($row['count'] == 0)
	{
		$stmt = $dbh->prepare("delete from categories where id = '$categoryid'");
		$stmt->execute();
	}
	include("../libs/closedb.php");
   exit;
}
?>