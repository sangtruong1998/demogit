<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IoT Nông Nghiệp</title>
</head>

<body>

<h1 align="center" style="background:#EE0000; color:#FFFF00"> GIÁM SÁT - ĐIỀU KHIỂN TRONG HỆ THỐNG IOT NÔNG NGHIỆP</h1>

<h2 align="center" style="color:#000099"> GIÁM SÁT</h2>
<table align="center" width="790px"  border="1px" cellpadding="0px" cellspacing="0px">
		                <?php
							$myfile = fopen("ND.php", "r") or die("Tập tin vừa yêu cầu không mở được");
							$x = fread($myfile,filesize("ND.php"));
							fclose($myfile);
							
							$myfile1 = fopen("DA.php", "r") or die("Tập tin vừa yêu cầu không mở được");
							$x1 = fread($myfile1,filesize("DA.php"));
							fclose($myfile1);
							
							$myfile2 = fopen("DA_DAT.php", "r") or die("Tập tin vừa yêu cầu không mở được");
							$x2 = fread($myfile2,filesize("DA_DAT.php"));
							fclose($myfile2);
							
							
							$myfile3 = fopen("TT_QUAT.php", "r") or die("Tập tin vừa yêu cầu không mở được");
							$x3 = fread($myfile3,filesize("TT_QUAT.php"));
							fclose($myfile3);
							
							$myfile4 = fopen("TT_BOM.php", "r") or die("Tập tin vừa yêu cầu không mở được");
							$x4 = fread($myfile4,filesize("TT_BOM.php"));
							fclose($myfile4);
							
							$myfile5 = fopen("TT_DEN.php", "r") or die("Tập tin vừa yêu cầu không mở được");
							$x5 = fread($myfile5,filesize("TT_DEN.php"));
							fclose($myfile5);
						
						?>
						
					   <tr align="center" style="background:#00FF00; color:#111111">
                            <td width="390px">
							    <h2><b>Nhiệt Độ Không Khí</b></h2>
							</td>
							
							<td width="390px">
								<h2><b>Độ Ẩm Không Khí</b></h2>
							</td>
							
							<td width="390px">
								<h2><b>Độ Ẩm Đất</b></h2>
							</td>
							
							
                       </tr>
					   
					   <tr align="center">				
                            <td width="390px"><h2><b><?php echo $x;?></b></h2>
							</td>
							
							<td width="390px"><h2><b><?php echo $x1;?></b></h2>
							</td>
							
							<td width="390px"><h2><b><?php echo $x2;?></b></h2>
							</td>
							
                       </tr>
</table>
<h2 align="center" style="color:#000099"> ĐIỀU KHIỂN</h2>
<table align="center" width="790px"  border="1px" cellpadding="0px" cellspacing="0px">
                       <tr align="center">
                            <td width="390px" style="background:#CCFF00; color:#111111">
								<h2><b>Quạt Phun Sương</b></h2>
							</td>
							<form method="POST"/>
								<td>
									<button style='height:50px; width:100px;background-color: #FF3300;' type='submit'  name='quat1' value='abcd_ef'><b>Bật</b></button>
								 </td>
								 <td>
									<button style='height:50px; width:100px;background-color: #66FFFF;' type='submit'  name='quat0' value='abcd_ef'><b>Tắt</b></button>
								 </td>
								 
                            </form> 
							
							
							<td style="color:#DD0000"><h3><b><?php echo $x3;?></b></h3>
							</td>
							
							
                       </tr>
					   
					   <tr align="center">
                            <td width="390px" style="background:#CCFF00; color:#111111">
								<h2><b>Bơm Nước</b></h2>
							</td>
							<form method="POST"/>
                                <td>
								<button style='height:50px; width:100px;background-color: #FF3300;' type='submit'  name='bom1' value='abcd_ef'><b>Bật</b></button>
								</td>
								<td>
								<button style='height:50px; width:100px;background-color: #66FFFF;' type='submit'  name='bom0' value='abcd_ef'><b>Tắt<b></button></td>
								</td>
                            </form> 
							
							
							<td style="color:#DD0000"><h3><b><?php echo $x4;?></b></h3>
							</td>
                       </tr>
					   
					   <tr align="center">
                            <td width="390px" style="background:#CCFF00; color:#111111">
								<h2><b>Đèn</b></h2>
							</td>
							
							<form method="POST"/>
                                <td>
									<button style='height:50px; width:100px;background-color: #FF3300;' type='submit'  name='den1' value='abcd_ef'><b>Bật<b/></button>
								</td>
								<td>
									<button style='height:50px; width:100px;background-color: #66FFFF;' type='submit'  name='den0' value='abcd_ef'><b>Tắt</b></button></td>
								</td>
                            </form> 
							
							
							<td style="color:#DD0000"><h3><b><?php echo $x5;?></b></h3>
							</td>
                       </tr>
</table>
<?php
	if($_POST["den1"])
	{
		$file = fopen("den.php", "w") or die("Tập tin vừa yêu cầu không mở được");
 		fwrite($file, " bat den ");
  		fclose($file);
		
		$file1 = fopen("TT_DEN.php", "w") or die("Tập tin vừa yêu cầu không mở được");
 		fwrite($file1, " ON ");
  		fclose($file1);
	}
	if($_POST["den0"])
	{
		$file = fopen("den.php", "w") or die("Tập tin vừa yêu cầu không mở được");
 		fwrite($file, " tat den ");
  		fclose($file);
		
		$file1 = fopen("TT_DEN.php", "w") or die("Tập tin vừa yêu cầu không mở được");
 		fwrite($file1, " OFF ");
  		fclose($file1);
	}
	
	if($_POST["bom1"])
	{
		$file = fopen("bom.php", "w") or die("Tập tin vừa yêu cầu không mở được");
 		fwrite($file, " bat bom ");
  		fclose($file);
		
		$file1 = fopen("TT_BOM.php", "w") or die("Tập tin vừa yêu cầu không mở được");
 		fwrite($file1, " ON ");
  		fclose($file1);
	}
	if($_POST["bom0"])
	{
		$file = fopen("bom.php", "w") or die("Tập tin vừa yêu cầu không mở được");
 		fwrite($file, " tat bom ");
  		fclose($file);
		
		$file1 = fopen("TT_BOM.php", "w") or die("Tập tin vừa yêu cầu không mở được");
 		fwrite($file1, " OFF ");
  		fclose($file1);
	}
	
	if($_POST["quat1"])
	{
		$file = fopen("quat.php", "w") or die("Tập tin vừa yêu cầu không mở được");
 		fwrite($file, " bat quat ");
  		fclose($file);
		
		$file1 = fopen("TT_QUAT.php", "w") or die("Tập tin vừa yêu cầu không mở được");
 		fwrite($file1, " ON ");
  		fclose($file1);
	}
	if($_POST["quat0"])
	{
		$file = fopen("quat.php", "w") or die("Tập tin vừa yêu cầu không mở được");
 		fwrite($file, " tat quat ");
  		fclose($file);
		
		$file1 = fopen("TT_QUAT.php", "w") or die("Tập tin vừa yêu cầu không mở được");
 		fwrite($file1, " OFF ");
  		fclose($file1);
	}
?>

</body>
</html>
