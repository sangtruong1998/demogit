<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$bom = $_GET['state'];
	if($bom=="bom1")
	{
		$file = fopen("bom.php", "w") or die("can't open file");
 		fwrite($file, "Bật bơm");
  		fclose($file);
	}
	if($bom=="bom0")
	{
		$file = fopen("bom.php", "w") or die("can't open file");
 		fwrite($file, "Tắt bơm");
  		fclose($file);
	}
?>