<?php
if(isset($_COOKIE['userid']))
{
	include('../libs/lang.php');
	//include('../libs/privilege.php'); 
	include('../develops/ourteam.php');
	if($lang_file == "ar")
	echo '<html xml:lang="ar" lang="ar" dir=rtl xmlns="http://www.w3.org/1999/xhtml">';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<?php include('../designs/head.php'); ?>
<script type="text/javascript" src="../js/ourteam.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script type="text/javascript" src="../js/maps.js"></script> -->
</head>
<body>
<div class="container">
<?php //include('../designs/headers/system.php'); ?>
<?php //if(checkBlockUserPri($userid,$profileid) && checkMeCirclePri($userid,$profileid)) { ?>
<?php include('../designs/containers/ourteam.php'); ?>
<?php //} else { echo '<center><h3>'; language("yblockuser"); echo '</h3></center>'; } ?>
<?php //include('designs/footer.php'); ?>
</div>
<?php //include('designs/script.php'); ?>
</body>
</html>
<?php
} else echo header('location:../index.php'); ?>