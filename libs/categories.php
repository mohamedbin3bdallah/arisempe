<?php

function getnoOfCategories()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from categories");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function getCategories($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from categories  LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['titleen'] = $row['titleen'];
			$allrows[$i]['titlear'] = $row['titlear'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function updateCategory($id,$titleen,$titlear)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update categories set titleen = '$titleen',titlear = '$titlear' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function insertCategory($titleen,$titlear)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `categories` (`titleen`,`titlear`) values ('$titleen','$titlear')");
	$stmt->execute();
	include("../libs/closedb.php");
}

?>