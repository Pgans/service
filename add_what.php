<?
session_start();
if(!isset($_SESSION['user'])){}
	//header("Location:index.php?show=admin");
?><html>
<head>
<title>detail_what</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>
<? include"config.php";?>
<body>
<? 

 switch($what) { 
     case "add" :	$sql_check="select id from  jobcom   where id='$id'"; 		
	 							$result_check=mysql_db_query($dbname,$sql_check);	
								$row_check=mysql_fetch_object($result_check);
								if($row_check->id==$id){
								echo "<script language='javascript'>
											alert('  มีผู้ใช้ ชื่อ  $head  นี้แล้ว  ')
											history.back()
											</script>";
								}else{
								$sql_new="select id from  jobcom   order by id desc ";
								$result_new=mysql_query($sql_new);
								$row_new=mysql_fetch_object($result_new);
								$id=$row_new->id+1;	
	 							$sql="insert into jobcom  values('".$id."','".$datejob."','".$dateline."','".$head."','".$datail."','".$plan."','".$user_com."','".$commant."','".$date_insert."')"; 		
	 							$result=mysql_db_query($dbname,$sql);
								$sql="insert into jobcom_service  values('".$id."',NULL,'".$workday."',NULL,'".$commant."','".$type."','".$user_job."')"; 		
	 							$result=mysql_db_query($dbname,$sql);
								}
	 						   	break; 
     case "edit" :	echo $what,"<br>";	
	 							$sql = "update jobcom set datejob='$datejob' where id='$id'"; 																			$result = mysql_db_query($dbname,$sql);
								$sql = "update jobcom set dateline='$dateline' where id='$id'"; 																		$result = mysql_db_query($dbname,$sql);
								$sql = "update jobcom set head='$head' where id='$id'"; 																				$result = mysql_db_query($dbname,$sql);
								$sql = "update jobcom set datail='$datail' where id='$id'"; 																	$result = mysql_db_query($dbname,$sql);
								$sql = "update jobcom set plan='$plan' where id='$id'"; 																	$result = mysql_db_query($dbname,$sql);
								$sql = "update jobcom set user_com='$user_com' where id='$id'"; 																		$result = mysql_db_query($dbname,$sql);
								$sql = "update jobcom set commant='$commant' where id='$id'"; 																	$result = mysql_db_query($dbname,$sql);
								$sql = "update jobcom set date_insert='$date_insert' where id='$id'"; 																	$result = mysql_db_query($dbname,$sql);
										$sql = "update jobcom_service set datework='$datework' where id='$id'"; 																				$result = mysql_db_query($dbname,$sql);
										$sql = "update jobcom_service set workday='$workday' where id='$id'"; 																	$result = mysql_db_query($dbname,$sql);
										$sql = "update jobcom_service set datefinal='$datefinal' where id='$id'"; 																	$result = mysql_db_query($dbname,$sql);
										$sql = "update jobcom_service set commant='$commant' where id='$id'"; 																	$result = mysql_db_query($dbname,$sql);
										$sql = "update jobcom_service set type='$type' where id='$id'"; 																	$result = mysql_db_query($dbname,$sql);
										$sql = "update jobcom_service set user_job='$user_job' where id='$id'"; 																	$result = mysql_db_query($dbname,$sql);
								break; 
	 case "del" :		
	 							$sql = "delete from jobcom  where id='$id' ";			$result = mysql_db_query($dbname,$sql);
								$sql = "delete from jobcom_service  where id='$id' ";			$result = mysql_db_query($dbname,$sql);		
	 							break; 
     default : echo "[  ........... ]";
}//case
		if($what=="del"||$what=="edit"){
		echo "<script language='javascript'>
								alert('  ปรับปรุงข้อมูลเรียบร้อยแล้ว  ')
								var targeturl='index.php?show=main';
								window.location=targeturl 
								</script>";
		}else{	
					if($result){
					echo "<script language='javascript'>
								alert('  ปรับปรุงข้อมูลเรียบร้อยแล้ว  ')
								var targeturl='index.php?show=main';
								window.location=targeturl 
								</script>";
					echo"</center>";}
					else {echo"<br>เกิดปัญหาในการบันทึก";
								echo "<script language='javascript'>
								alert('  เกิดปัญหาในการบันทึก  ')
								history.back()
								</script>";}
		}

?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">