<?php
if(isset($_POST['subservice'],$_POST['serviceid']))
{
	$subserviceid = $_POST['subservice'];
	$serviceid = $_POST['serviceid'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("delete from subservices where id = '$subserviceid'");
	$stmt->execute();
	
	$result = $dbh->query("select count(*) as count from subservices where serviceid = '$serviceid'");
	$row = $result->fetch();
	if($row['count'] == 0)
	{
		$stmt = $dbh->prepare("update services set haschilds = 0 where id = '$serviceid'");
		$stmt->execute();
	}
	include("../libs/closedb.php");
   exit;
}
?>