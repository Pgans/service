<?
session_start();
if(!isset($_SESSION['user'])){echo $_SESSION['user'];}
//	header("Location:index.php?show=admin");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>COMPUTER SERVICE �ٹ����������� þ.��ǧ����Ժ</title>
<? if($show=="admin"||$show=="add_job"||$show=="main"||$show=="report"||$show=="calender"){?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<? } else{?>
<? }?>


<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:791px;
	top:152px;
	width:46px;
	height:47px;
	z-index:1;
}
.style1 {
	color: #990000;
	font-weight: bold;
}
.style2 {color: #0000FF}
#Layer2 {
	position:absolute;
	left:320px;
	top:231px;
	width:52px;
	height:35px;
	z-index:2;
}
-->
</style>
</head>
<? include"config.php";?>
<body background="backgr/pgan_engineer5.png" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="899" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr > 
    <td colspan="3"><img src="images/computerg.gif" alt="" width="153" height="70" /><img src="images/m30.gif" alt="" width="632" height="45" /></td>
  </tr>
  <tr> 
    <td width="31" height="33" bgcolor="#ECE9D8">&nbsp;</td>
    <td width="868" colspan="2" bgcolor="#ECE9D8"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><a href="index.php" >˹����ѡ</a> 
      | <a href="index.php?show=add_job" >�駫�������������</a> 
	  |<a href="index.php?show=add_job" > ��ԡ���ʵ��ȹ�֡��</a> | <a href="index.php?show=main" >�Դ����ҹ</a> 
      | <a href="index.php?show=admin" >Admin</a>
      | <a href="index.php?show=report" >Report</a>
	  | <a href="File/year+computer.xls"></a><a href="Html/network2.files/network2.htm" >Network</a> |<a href="Html/network_diagram.files/page_1.htm?show=add_job" > Diagram </a>| </td>
</table>
<? if($show==""){?>
<table width="92%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><font size="3" face="tahoma"><strong>��͵�ŧ��ԡ��</strong></font></td>
  </tr>
  <tr>
    <td><font size="2" face="tahoma">1. ŧ����¹�駡�ë����������������� <strong><span class="style2">�ٹ����������</span>� </strong>�ç��Һ����ǧ����Ժ���к� intranet <br />
      2. �Դ����ҹ ����˹���ǻ �ó���觴�ǹ�� �µç����  �س�ҵ�� �ح�� ���ͤس͹ѹ��ѡ��� �ѵ����� ������508</font></td>
  </tr>
  <tr>
    <td><span class="style1">E-mail</span> <font size="2" face="tahoma">�ç��Һ����ǧ����Ժ&nbsp; ���ͼ����:mhosp.gan@gmail.com ���ʼ�ҹ:m30hospital&nbsp;����ö����ء���������ӡѴ...��Ѻ<a href="http://login.live.com/login.srf?wa=wsignin1.0&amp;rpsnv=11&amp;ct=1280376196&amp;rver=6.0.5285.0&amp;wp=MBI&amp;wreply=http:%2F%2Fmail.live.com%2Fdefault.aspx&amp;lc=1054&amp;id=64855&amp;mkt=th-th"><img src="images/hotmail.jpeg" alt="" width="105" height="31" /></a><a href="https://www.google.com/accounts/ServiceLogin?service=mail&amp;passive=true&amp;rm=false&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%3Fui%3Dhtml%26zy%3Dl&amp;bsv=1eic6yu9oa4y3&amp;ss=1&amp;scc=1&amp;ltmpl=default&amp;ltmplcache=2&amp;hl=th"><img src="images/gmail.jpeg" alt="" width="37" height="34" /></a></font></td>
  </tr>
</table>
<table width="918" border="0" align="center" cellpadding="0" cellspacing="0" background="imag/mainpage.gif">
  <tr> 
    <td width="918"> 
      <p><font face="tahoma">
        <? 
	  $date_now=date("Y/m/d");
	  $sql="select * from jobcom left join jobcom_service on jobcom.id=jobcom_service.id  where  jobcom_service.commant ='1'  order by jobcom.id desc";
			$result=mysql_query($sql);
			?>
        <font size="2"><strong>���ҧ�Ѻ�ҹ 
          : 
      </strong></font></font></p>
      <table width="918" border="0" align="center" cellpadding="3" cellspacing="1">
        <tr bgcolor="#6464FF">
          <td width="4%" height="23"><div align="center"><font color="#FFFFFF" size="2" face="tahoma"><strong>�Ţ���</strong></font></div></td>
          <td width="24%"><div align="center"><font color="#FFFFFF" size="2" face="tahoma"><strong>�Ԩ����/�ҹ</strong></font></div></td>
          <td width="8%"><div align="center"><font color="#FFFFFF" size="2" face="tahoma"><strong>Ǵ�.�����</strong></font></div></td
          ><td width="14%"><div align="center"><font color="#FFFFFF" size="2" face="tahoma"><strong>˹��§ҹ</strong></font></div></td>
          <td width="12%"><div align="center"><font color="#FFFFFF" size="2" face="tahoma"><strong>�����</strong></font></div></td>
          <td width="6%"><font color="#FFFFFF" size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>����Ѻ�ҹ</strong></font></td>
          <td width="7%"><div align="center"><font color="#FFFFFF" size="2" face="tahoma"><strong>ʶҹ�</strong></font></div></td>
          <? if(isset($_SESSION['user'])){?>
          <td width="7%"><font color="#FFFFFF" size="2" face="tahoma"><strong>��� 
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
	 echo "<script language='javascript'>
				if (confirm('�էҹ���� ���س $user �ѧ���������  ����Ѻ�ҹ �� OK ?')) {					
					var	link='index.php?show=main&id=$row->id&user=$user'
					window.location=link
				}else{
								alert('  ¡���ԡ��ô� �ҹ ���  ')
								history.back()
							}
								</script>";
								
}
	?>
          <td bgcolor="#FFFFFF"><div align="center"><font size="2" face="tahoma"><? echo $row->id;?></font></div></td>
          <td bgcolor="#FFFFFF"><font size="2" face="tahoma"><? echo $row->head;?></font></td>
          <td bgcolor="#FFFFFF"><font size="2" face="tahoma"><? echo $row->datejob;?></font></td>
          <td bgcolor="#FFFFFF"><div align="center"><font size="2" face="tahoma"> 
            <? //echo $row->plan;
	$sql_plan="select * from jobcom_hospital_department  where id='$row->plan'";
	$result_plan=mysql_query($sql_plan);
	$row_plan=mysql_fetch_object($result_plan);
	echo $row_plan->name;
	
	?> 
          </font></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><font size="2" face="tahoma"><? echo $row->user_com;?></font></div></td>
          <td bgcolor="#FFFFFF"><font size="2" face="tahoma"><? //echo $row->user_job;
	$sql_login="select * from  jobcom_login  where  pwd='$row->user_job' ";
	$result_login=mysql_query($sql_login);
	$row_login=mysql_fetch_object($result_login);
	echo $row_login->fullname;
	?></font></td>
          
          <td bgcolor="#FFFFFF"><div align="center"><font size="2" face="tahoma"> <? //echo $row->commant;
	$sql_status="select * from  jobcom_status where  id='$row->commant' ";
	$result_status=mysql_query($sql_status);
	$row_status=mysql_fetch_object($result_status);
	echo $row_status->status;
	?> </font></div></td>
          <? if($_SESSION['user']){?>
          <td bgcolor="#FFFFFF"><font size="2" face="tahoma"><strong><a href="index.php?show=add_job&amp;what=edit&amp;id=<? echo $row->id;?>">���</a></strong> / <strong><a href="index.php?show=main&amp;what=del&amp;id=<? echo $row->id;?>">ź</a></strong></font></td>
          <? } ?>
        </tr>
        <? } ?>
      </table>      
      <p align="center"><font color="#990000" size="2" face="tahoma"><marquee behavior="alternate">�ٹ������������ç��Һ����ǧ����Ժ</marquee></font></p>
      <p align="center"><font color="#990000" size="2" face="tahoma">
        <? }else{ 
switch($show){
case "main":  			include"main.php";
									break; 
case "add_job":	include"add_job.php";
									break; 
case "admin":  		include"admin.php";
									break; 
case "calender":  		include"calender_job.php";
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
      </font></p>
      <p align="center"><br />
    </p></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; </p>
</body>
</html>
