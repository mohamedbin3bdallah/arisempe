<?php

function getnoOfTestimonials()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from testimonials");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function getTestimonials($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from testimonials LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['body'] = $row['body'];
			$allrows[$i]['name'] = $row['name'];			
			$allrows[$i]['job'] = $row['job'];
			$allrows[$i]['company'] = $row['company'];
			$allrows[$i]['website'] = $row['website'];
			$allrows[$i]['pic'] = $row['pic'];
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
		$image_director = "../uploads/testimonials";
		$_FILES["file"]["name"] = rand().'.'.$file_extn;
		move_uploaded_file($_FILES["file"]["tmp_name"], $image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj = new Resize($image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj -> resizeImage(210, 210, 'exact');
		$resizeObj -> saveImage($image_director.'/thumbnail/'.$_FILES["file"]["name"], 100);
		return $_FILES["file"]["name"];
	}
	else return 0;
}

function updateTestimonial($id,$body,$name,$job,$company,$website,$image)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update testimonials set body = '$body',name = '$name',job = '$job',company = '$company',website = '$website',pic = '$image' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function insertTestimonial($body,$name,$job,$company,$website,$image)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `testimonials` (`body`, `name`, `job`, `company`, `website`, `pic`) values ('$body', '$name', '$job', '$company', '$website', '$image')");
	$stmt->execute();
	include("../libs/closedb.php");
}

?>