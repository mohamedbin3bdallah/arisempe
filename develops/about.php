<meta charset="utf-8"/>

<?php
include('../libs/about.php');
$userid = $_COOKIE['userid'];
if(isset($_POST['saveabout']))
{
	unset($_POST['saveabout']);
	//print_r($_POST);
	updateAboutEN($_POST['oldid'],$_POST['bodyen'],$_POST['visionen'],$_POST['missionen'],$_POST['ourvaluesen'],$_POST['logostoryen']);
	updateAboutAR($_POST['oldid'],$_POST['bodyar'],$_POST['visionar'],$_POST['missionar'],$_POST['ourvaluesar'],$_POST['logostoryar']);
}
?>