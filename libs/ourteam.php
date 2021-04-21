<?php

function getnoOfOurTeam()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from clients");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function getOurTeam($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from ourteam LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['nameen'] = $row['nameen'];
			$allrows[$i]['namear'] = $row['namear'];
			$allrows[$i]['jobtitleen'] = $row['jobtitleen'];
			$allrows[$i]['jobtitlear'] = $row['jobtitlear'];
			$allrows[$i]['descriptionen'] = $row['descriptionen'];
			$allrows[$i]['descriptionar'] = $row['descriptionar'];
			$allrows[$i]['image'] = $row['image'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function getOurTeamByID($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from ourteam where id = '$id'");
	$allrows = array();	
	if(!empty($result))
	{
		$row = $result->fetch();
		$allrows['nameen'] = $row['nameen'];
		$allrows['namear'] = $row['namear'];
		$allrows['jobtitleen'] = $row['jobtitleen'];
		$allrows['jobtitlear'] = $row['jobtitlear'];
		$allrows['descriptionen'] = $row['descriptionen'];
		$allrows['descriptionar'] = $row['descriptionar'];
		$allrows['image'] = $row['image'];
	}
	include("../libs/closedb.php");
	return $allrows;	
}

function upload_profile_picture()
{
	$file_extn = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	if($_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/gif" || $_FILES["file"]["type"] == "image/png")
	{
		$image_director = "../uploads/ourteam";
		$_FILES["file"]["name"] = rand().'.'.$file_extn;
		move_uploaded_file($_FILES["file"]["tmp_name"], $image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj = new Resize($image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj -> resizeImage(210, 210, 'exact');
		$resizeObj -> saveImage($image_director.'/thumbnail/'.$_FILES["file"]["name"], 100);
		return $_FILES["file"]["name"];
	}
	else return 0;
}

function updateOurTeam($id,$nameen,$namear,$jobtitleen,$jobtitlear,$descriptionen,$descriptionar,$image)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update ourteam set nameen = '$nameen',namear = '$namear',jobtitleen = '$jobtitleen',jobtitlear = '$jobtitlear',descriptionen = '$descriptionen',descriptionar = '$descriptionar',image = '$image' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function insertOurTeam($nameen,$namear,$jobtitleen,$jobtitlear,$descriptionen,$descriptionar,$image)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `ourteam` (`nameen`,`namear`,`jobtitleen`,`jobtitlear`,`descriptionen`,`descriptionar`,`image`) values ('$nameen','$namear','$jobtitleen','$jobtitlear','$descriptionen','$descriptionar','$image')");
	$stmt->execute();
	include("../libs/closedb.php");
}

?>