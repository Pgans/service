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
		<font face="MS Sans Serif, Tahoma, sans-serif"size="2" color="#0000FF"> ���ʶ١��ͧ</font><br>
		<script>
		alert("���ʼ�ҹ�١��ͧ  ","login OK");
		window.location='index.php';</script>
		<a href="admin.php"target="_top">������</a> <a href="index.php"target="_top">˹����ѡ</a> 

<? }
     else{  ?>
	    <div align="center">
<p align="center"><font face="MS Sans Serif, Tahoma, sans-serif"size="2" color="red">���ͼ�����������ʼ�ҹ���١��ͧ</font><br>
    <script>alert("���ʼ�ҹ���١��ͧ ��س������������ ","error password");
window.location='index.php?show=admin';</script>
    <a href="index.php?show=admin">��͡�Թ</a> 
    <?

}
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620">
</head>