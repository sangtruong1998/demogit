<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$ND = $_GET['field1'];
$DA = $_GET['field2'];
$DA_DAT = $_GET['field3'];
if($ND)
{
  $file = fopen("ND.php", "w") or die("can't open file");
  fwrite($file, $ND);
  fclose($file);
}
if($DA)
{
  $file1 = fopen("DA.php", "w") or die("can't open file");
  fwrite($file1, $DA);
  fclose($file1);
}
if($DA_DAT)
{
  $file2 = fopen("DA_DAT.php", "w") or die("can't open file");
  fwrite($file2, $DA_DAT);
  fclose($file2);
 }
$myfile = fopen("den.php", "r") or die("can't open file");
$x = fread($myfile,filesize("den.php"));
echo $x;
fclose($myfile);

$myfile1 = fopen("quat.php", "r") or die("can't open file");
$x1 = fread($myfile1,filesize("quat.php"));
echo $x1;
fclose($myfile1);

$myfile2 = fopen("bom.php", "r") or die("can't open file");
$x2 = fread($myfile2,filesize("bom.php"));
echo $x2;
fclose($myfile2);

?>

