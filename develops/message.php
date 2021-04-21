<?php
if(isset($_POST['sendmessage']))
{
	unset($_POST['sendmessage']);
	if($_POST['name'] != '' && $_POST['email'] != '' && $_POST['message'] != '')
	{
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			if(preg_match("/^[a-zA-Z ]*$/",$_POST['name']))
			{
				$to = 'Arise-mpe <info@arise-mpe.com>';
				$from = $_POST['name'] . ' <' . $_POST['email'] . '>';
				$subject = 'Message from ' . $_POST['name'] . ' - Contact Form ';	
				$message = '
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
					"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
						<head></head>
						<body>
							<table>
								<tr><td>Name</td><td>' . $_POST['name'] . '</td></tr>
								<tr><td>Email</td><td>' . $_POST['email'] . '</td></tr>
								<tr><td>Comment</td><td>' . nl2br($_POST['message']) . '</td></tr>
							</table>
						</body>
					</html>';
				
				$headers = "MIME-Version: 1.0" . "\r\n";
				//$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= 'From: ' . $from . "\r\n";
	
				mail($to,$subject,$message,$headers);
			}
		}
	}
}
header('location: /');
?>
