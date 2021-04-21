<?php
include('../libs/lang.php');
include('../libs/servicesfront.php');
if(isset($_GET['title']) && $_GET['title'] != '')
{
	$subcategoryid = getIDByTitle('subcategories','id',$_GET['title']);
	$services = getServices($subcategoryid);
}
?>