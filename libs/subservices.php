<?php

function getnoOfSubServices($serviceid)
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from subservices where serviceid = '$serviceid'");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function getSubServices($serviceid,$startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from subservices where serviceid = '$serviceid' LIMIT $startResults, $resultsPerPage");
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

function updateSubServices($id,$titleen,$titlear)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update subservices set titleen = '$titleen',titlear = '$titlear' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function updateServicesChild($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update services set haschilds = '$haschilds' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function insertSubServices($serviceid,$titleen,$titlear)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `subservices` (`serviceid`,`titleen`,`titlear`) values ('$serviceid','$titleen','$titlear')");
	$stmt->execute();
	include("../libs/closedb.php");
}

?>