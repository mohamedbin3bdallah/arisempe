<?php

function getServices($subcategoryid)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from services where subcategoryid = '$subcategoryid'");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['title'] = $row['title'];
			$allrows[$i]['image'] = $row['image'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function getSubServices($serviceid)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from subservices where serviceid = '$serviceid'");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['title'] = $row['title'];			
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function getIDByTitle($table,$field,$title)
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select {$field} from {$table} where title like '$title'");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row[$field];
}

?>