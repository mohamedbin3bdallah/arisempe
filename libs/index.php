<?php

function getWish()
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("SELECT * FROM wishes ORDER BY RAND() LIMIT 1");	
	include("libs/closedb.php");
	if(!empty($result))
	{
		$row = $result->fetch();
		return $row;
	}
}

function getCarousel()
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select * from carousel");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['name'] = $row['name'];			
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getAbout($lang)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select body{$lang} as body,vision{$lang} as vision,mission{$lang} as mission,ourvalues{$lang} as ourvalues,logostory{$lang} as logostory from about");
	$row = $result->fetch();	
	include("libs/closedb.php");
	return $row;
}

function getCategories($lang)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select id,title{$lang} as title from categories");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['title'] = $row['title'];			
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getSubCategories($lang)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select id,categoryid,title{$lang} as title,haschilds,icon from subcategories");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['categoryid'] = $row['categoryid'];
			$allrows[$i]['title'] = $row['title'];
			//$allrows[$i]['image'] = $row['image'];
			$allrows[$i]['haschilds'] = $row['haschilds'];
			$allrows[$i]['icon'] = $row['icon'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getServices($subcategoryid,$lang)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select id,title{$lang} as title,haschilds,icon from services where subcategoryid = '$subcategoryid'");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['title'] = $row['title'];
			//$allrows[$i]['image'] = $row['image'];
			$allrows[$i]['haschilds'] = $row['haschilds'];
			$allrows[$i]['icon'] = $row['icon'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getSubServices($serviceid,$lang)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select id,title{$lang} as title from subservices where serviceid = '$serviceid'");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['title'] = $row['title'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getTitleByID($table,$field,$id)
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = $dbh->query("select {$field} as title from {$table} where id = '$id'");
	$row = $result->fetch();
	include("libs/closedb.php");
	return $row['title'];
}

function getOffers($lang)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select id,titleen,title{$lang} as title,description{$lang} as description,image from offers");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['titleen'] = $row['titleen'];
			$allrows[$i]['title'] = $row['title'];
			$allrows[$i]['description'] = $row['description'];
			$allrows[$i]['image'] = $row['image'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getClients()
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select * from clients");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['image'] = $row['image'];
			$allrows[$i]['title'] = $row['title'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getOurteam($lang)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select id,name{$lang} as name,jobtitle{$lang} as jobtitle,description{$lang} as description,image from ourteam");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['name'] = $row['name'];
			$allrows[$i]['jobtitle'] = $row['jobtitle'];
			$allrows[$i]['description'] = $row['description'];
			$allrows[$i]['image'] = $row['image'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getTestimonials()
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select * from testimonials");
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
	include("libs/closedb.php");
	return $allrows;
}

function getContact($lang)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select *,address{$lang} as address from contact");
	$row = $result->fetch();	
	include("libs/closedb.php");
	return $row;
}

?>