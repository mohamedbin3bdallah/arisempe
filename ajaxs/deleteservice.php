<?php
if(isset($_POST['service'],$_POST['subcategoryid']))
{	
	$serviceid = $_POST['service'];
	$subcategoryid = $_POST['subcategoryid'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select count(*) as count from subservices where serviceid = '$serviceid'");
	$row = $result->fetch();
	if($row['count'] == 0)
	{
		/*if($_POST['image'] != '')
		{
			unlink("../uploads/services/".$_POST['image']);
			unlink("../uploads/services/thumbnail/".$_POST['image']);
		}*/
		$stmt = $dbh->prepare("delete from services where id = '$serviceid'");
		$stmt->execute();
		
		$result = $dbh->query("select count(*) as count from services where subcategoryid = '$subcategoryid'");
		$row = $result->fetch();
		if($row['count'] == 0)
		{
			$stmt = $dbh->prepare("update subcategories set haschilds = 0 where id = '$subcategoryid'");
			$stmt->execute();
		}
	}
	include("../libs/closedb.php");
   exit;
}
?>