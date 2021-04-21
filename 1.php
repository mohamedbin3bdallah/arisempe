<?php
	//echo hash('sha256', '123', FALSE);
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	?><pre><?php print_r($_SERVER); ?></pre><?php
?>