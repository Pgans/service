<?
    session_start();
	
	$pwd=$_REQUEST['pwd'];
	$uname=$_REQUEST['uname'];
	if ($pwd){
	include"config.php";
		
	$query="select  *  from  jobcom_login  where  uname='$uname' and pwd='$pwd' ";
	$result=mysql_query($query);
	//echo $query;
	$rows=mysql_fetch_object($result);
	if ($uname==$rows->uname){
	$user=$rows->pwd;
	session_register("user");
	?>
		<font face="MS Sans Serif, Tahoma, sans-serif"size="2" color="#0000FF"> รหัสถูกต้อง</font><br>
		<script>
		alert("รหัสผ่านถูกต้อง  ","login OK");
		window.location='index.php';</script>
		<a href="admin.php"target="_top">ผู้ดูแล</a> <a href="index.php"target="_top">หน้าหลัก</a> 

<? }
     else{  ?>
	    <div align="center">
<p align="center"><font face="MS Sans Serif, Tahoma, sans-serif"size="2" color="red">ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง</font><br>
    <script>alert("รหัสผ่านไม่ถูกต้อง กรุณาใส่รหัสใหม่ ","error password");
window.location='index.php?show=admin';</script>
    <a href="index.php?show=admin">ล็อกอิน</a> 
    <?

}
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620">
</head>