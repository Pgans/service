<?
session_start();
if(!isset($_SESSION['user'])){echo $_SESSION['user'];}
//	header("Location:index.php?show=admin");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Conference Room Reservation System �ٹ����������� þ.��Һ͹</title>
<link href="style/templatemo_style.css" rel="stylesheet" type="text/css" />
<? if($show=="admin"||$show=="add_job"||$show=="main"||$show=="report"||$show=="calender"){?>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620">
<? } else{?>
<? }?>


</head>
<? include"config.php";
//require("inc/header.php");?>
<body>
<div align="center">
<? include"inc/header.php";?>
<? if($show==""){?>
</div>
<table width="930" border="0" align="center" cellpadding="0" cellspacing="0" background="imag/mainpage.gif">
  <tr> 
    <td> 
      <? 
	  $date_now=date("Y/m/d");
	  $sql="select * from jobcom left join jobcom_service on jobcom.id=jobcom_service.id  where  jobcom_service.commant ='1'  order by jobcom.id desc";
			$result=mysql_query($sql);
			?>
      <font size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>���ҧ�Ѻ�ҹ�ͧ 
      : 
      <? ?>
      </strong></font></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="930" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#6464FF"> 
    <td width="4%" height="23"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">�Ţ���</font></strong></font></div></td>
    <td width="24%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">�Ԩ����/�ҹ</font></strong></font></div></td>
    <td width="8%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">Ǵ�.�����</font></strong></font></div></td>
    <td width="8%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">Ǵ�.����ͧ�����</font></strong></font></div></td>
    <td width="14%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">˹��§ҹ</font></strong></font></div></td>
    <td width="12%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">�����</font></strong></font></div></td>
    <td width="8%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">Ǵ�.����Ѻ�ҹ</font></strong></font></div></td>
    <td width="8%"><div align="center"><font color="#FFFFFF" size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>Ǵ�.�����觧ҹ</strong></font></div></td>
    <td width="7%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">ʶҹ�</font></strong></font></div></td>
    <? if(isset($_SESSION['user'])){?>
    <td width="7%"><font color="#FFFFFF" size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>��� 
      / ź</strong></font></td>
    <? } ?>
  </tr>
  <tr> 
    <? while($row=mysql_fetch_object($result)){?>
	<? if($row->user_job==$_SESSION['user']){
	$user=$_SESSION['user'];
	?>
	<script>
					//  var sound=new Array("alert_newjob.mp3","alert_newjob.mp3","alert_newjob.mp3","alert_newjob.mp3")
					
					//var randomsoundenumber=Math.floor((sound.length)*Math.random())
								//	if (confirm('��ͧ��ÿѧ�ŧ'+sound[randomsoundenumber]+'  ������� ?')) {
									//var targeturl='blood_del_php.php?idd=$idd&count_blood=$count_blood';
									//window.location=targeturl 
									
									
					//document.write("<EMBED SRC='"+sound[randomsoundenumber]+"' AUTOSTART='TRUE' LOOP='FALSE' WIDTH='0' HEIGHT='0' ALIGN='CENTER'>")
					//document.write("<NOEMBED>")
					//document.write("<BGSOUND SRC='"+sound[randomsoundenumber]+"' LOOP='1'>")
					//document.write("<NOEMBED>")
					//document.write("</EMBED>") 
					
	</script>
<? 
	/* echo "<script language='javascript'>
				if (confirm('�էҹ���� ���س $user �ѧ���������  ����Ѻ�ҹ �� OK ?')) {					
					var	link='index.php?show=main&id=$row->id&user=$user'
					window.location=link
				}else{
								alert('  ¡���ԡ��ô� �ҹ ���  ')
								history.back()
							}
								</script>";
								*/
}
	?>
    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $row->id;?></font></td>
    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $row->head;?></font></td>
    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $row->datejob;?></font></td>
    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $row->dateline;?></font></td>
    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> <? echo $row->plan;
	$sql_plan="select * from jobcom_hospital_department  where id='$row->plan'";
	$result_plan=mysql_query($sql_plan);
	$row_plan=mysql_fetch_object($result_plan);
	echo " : ",$row_plan->name;
	
	?> </font></td>

    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $row->user_com;?></font></td>
    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $row->datework;?></font></td>
    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $row->datefinal;?></font></td>
    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> <? echo $row->commant;
	$sql_status="select * from  jobcom_status where  id='$row->commant' ";
	$result_status=mysql_query($sql_status);
	$row_status=mysql_fetch_object($result_status);
	echo " : ",$row_status->status;
	?> </font></td>
    <? if($_SESSION['user']){?>
    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong><a href="index.php?show=add_job&what=edit&id=<? echo $row->id;?>">���</a></strong></font> 
      / <strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><a href="index.php?show=main&what=del&id=<? echo $row->id;?>">ź</a></font></strong></td>
    <? } ?>
  </tr>
  <? } ?>
  
</table>
<? }else{ 
switch($show){
case "calender":  			include"calender_job.php";
									break; 
case "add_job":	include"add_job.php";
									break; 
case "admin":  		include"admin.php";
									break; 
case "main":  		include"main.php"; 
									break; 
case "report":  		include"report.php";
									switch($type_job){
									case "1":  			include"fusion_db_job.php";
									                                                        break; 
									case "2":       	include"fusion_db_plan.php";
									                                                         break; 
									case "3":       	include"fusion_db_user.php";
									                                                         break; 
									case "fusion_db_job_line":  			include"fusion_db_job_line.php";
									                                                        break; 
									case "fusion_db_plan_line":       	include"fusion_db_plan_line.php";
									                                                         break; 
									case "fusion_db_user_line":       	include"fusion_db_user_line.php";
									                                                         break; 
									case "select_report":       	include"select_report_show.php";
									                                                         break;
									
									default : echo "";
									}
									break; 
default : echo "";				

}
}?>
<? include"inc/footer.php";?></body>
</html>
