<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$den = $_GET['state'];
	if($den=="den1")
	{
		$file = fopen("den.php", "w") or die("can't open file");
 		fwrite($file, "bat den");
  		fclose($file);
	}
	if($den=="den0")
	{
		$file = fopen("den.php", "w") or die("can't open file");
 		fwrite($file, "tat den");
  		fclose($file);
	}
?>