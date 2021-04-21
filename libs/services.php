<?php

function getTitleByID($table,$id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select title from {$table} where id = '$id'");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['title'];
}

function getnoOfServices($subcategoryid)
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from services where subcategoryid = '$subcategoryid'");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function getServices($subcategoryid,$startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from services where subcategoryid = '$subcategoryid' LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['titleen'] = $row['titleen'];
			$allrows[$i]['titlear'] = $row['titlear'];
			$allrows[$i]['icon'] = $row['icon'];
			$allrows[$i]['haschilds'] = $row['haschilds'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

/*
function upload_profile_picture($name)
{
	$file_extn = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	if($_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/gif" || $_FILES["file"]["type"] == "image/png")
	{
		$image_director = "../uploads/services";
		$_FILES["file"]["name"] = $name.'.'.$file_extn;
		move_uploaded_file($_FILES["file"]["tmp_name"], $image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj = new Resize($image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj -> resizeImage(210, 210, 'exact');
		$resizeObj -> saveImage($image_director.'/thumbnail/'.$_FILES["file"]["name"], 100);
		return $_FILES["file"]["name"];
	}
	else return 0;
}
*/

function updateServices($id,$titleen,$titlear,$icon)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update services set titleen = '$titleen',titlear = '$titlear',icon = '$icon' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function updateSubCategoriesChild($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update subcategories set haschilds = '1' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function insertServices($subcategoryid,$titleen,$titlear,$icon)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `services` (`subcategoryid`,`titleen`,`titlear`,`icon`) values ('$subcategoryid','$titleen','$titlear','$icon')");
	$stmt->execute();
	include("../libs/closedb.php");
}

?>