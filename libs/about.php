<?php

function getAbout()
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from about");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row;	
}

function updateAboutAR($id,$bodyar,$visionar,$missionar,$ourvaluesar,$logostoryar)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update about set bodyar = '$bodyar',visionar = '$visionar',missionar = '$missionar',ourvaluesar = '$ourvaluesar',logostoryar = '$logostoryar' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function updateAboutEN($id,$bodyen,$visionen,$missionen,$ourvaluesen,$logostoryen)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update about set bodyen = '$bodyen',visionen = '$visionen',missionen = '$missionen',ourvaluesen = '$ourvaluesen',logostoryen = '$logostoryen' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

?>