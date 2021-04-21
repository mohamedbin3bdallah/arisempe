<?php

function getContact()
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from contact");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row;	
}

function updateContact($id,$mobile,$phone,$sphone,$email,$addressen,$addressar,$facebook,$twitter,$googleplus,$linkedin,$instagram,$pinterest,$youtube)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update contact set mobile = '$mobile',phone = '$phone',sphone = '$sphone',email = '$email',addressen = '$addressen',addressar = '$addressar',facebook = '$facebook',twitter = '$twitter',googleplus = '$googleplus',linkedin = '$linkedin',instagram = '$instagram',pinterest = '$pinterest',youtube = '$youtube' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

?>