<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$quat = $_GET['state'];
	if($quat=="quat1")
	{
		$file = fopen("quat.php", "w") or die("can't open file");
 		fwrite($file, "Bật quạt");
  		fclose($file);
	}
	if($quat=="den0")
	{
		$file = fopen("quat.php", "w") or die("can't open file");
 		fwrite($file, "Tắt quạt");
  		fclose($file);
	}
?>