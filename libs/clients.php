<?php

function getnoOfClients()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from clients");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function getClients($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from clients LIMIT $startResults, $resultsPerPage");
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


function upload_profile_picture()
{
	$file_extn = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	if($_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/gif" || $_FILES["file"]["type"] == "image/png")
	{
		$image_director = "../uploads/clients";
		$_FILES["file"]["name"] = rand().'.'.$file_extn;
		move_uploaded_file($_FILES["file"]["tmp_name"], $image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj = new Resize($image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj -> resizeImage(95, 95, 'exact');
		$resizeObj -> saveImage($image_director.'/thumbnail/'.$_FILES["file"]["name"], 100);
		return $_FILES["file"]["name"];
	}
	else return 0;
}

function updateClients($id,$title,$image)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update clients set title = '$title',image = '$image' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function insertClients($title,$image)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `clients` (`title`,`image`) values ('$title','$image')");
	$stmt->execute();
	include("../libs/closedb.php");
}

?>