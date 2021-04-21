<?php
if(isset($_POST['subcategory']))
{	
	$subcategoryid = $_POST['subcategory'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select count(*) as count from services where subcategoryid = '$subcategoryid'");
	$row = $result->fetch();
	if($row['count'] == 0)
	{
		$stmt = $dbh->prepare("delete from subcategories where id = '$subcategoryid'");
		$stmt->execute();
	}
	include("../libs/closedb.php");
   exit;
}
?>