<?
session_start();
if(!isset($_SESSION['user'])){}
	//header("Location:index.php?show=admin");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>����������</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<script language='javascript' src='popcalendar.js'></script>
</head>
<? include"config.php";?>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="25" background="imag/mainpage.gif"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>&nbsp;&nbsp;<font size="3">����������</font></strong></font></td>
  </tr>
  <tr> 
    <td><form name="form1" method="post" action="add_what.php">
        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="8%"><div align="right"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">�Ţ���</font></strong></div></td>
            <td width="43%">
			<? 
			if($what=="edit"){
			$sql_new="select * from  jobcom   where id='$id' ";
			$result_new=mysql_query($sql_new);
			$row_new=mysql_fetch_object($result_new);
			$id_edit=$row_new->id;
			}else{
			
			$sql_new="select id from  jobcom   order by id desc limit 1 ";
			$result_new=mysql_query($sql_new);
			$row_new=mysql_fetch_object($result_new);
			$id=$row_new->id+1;
			$id_new=$id;
			$what="add";
			}
			//echo $what;
								?>
			<input name="id" type="text" id="id" value="<? if($what=="edit"){echo $row_new->id;}else{echo"Auto";}?>" size="10" readonly="">
			<input name="id" type="hidden" id="id" value="<? if($what=="edit"){echo $row_new->id;}else{echo $id;}?>" size="10" readonly=""></td>
            <td width="49%"><font size="3" face="MS Sans Serif, Tahoma, sans-serif"><strong>����Ѻ�������к�</strong></font></td>
          </tr>
          <tr> 
            <td><div align="right"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">Ǵ�.�����</font></strong></div></td>
            <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> <strong> 
              <input name="datejob" type="text" id="datejob" value="<? if($what=="edit"){echo $row_new->datejob;}else{echo date("Y/m/d");}?>" size="10">
              </strong> 
              <script language='JavaScript'>
	<!--
	 			 if (!document.layers) {
	   			 document.write("<input type=button onclick='popUpCalendar(this, form1.datejob, \"yyyy/mm/dd\")' value=' �ѹ��� ' style='font-size:9px'>")
				}	//-->
				
</script>
              <strong>Ǵ�.����ͧ��� 
              <input name="dateline" type="text" id="dateline" value="<? if($what=="edit"){echo $row_new->dateline;}else{echo date("Y/m/d");}?>" size="10">
              </strong> 
              <script language='JavaScript'>
	<!--
	 			 if (!document.layers) {
	   			 document.write("<input type=button onclick='popUpCalendar(this, form1.dateline, \"yyyy/mm/dd\")' value=' �ѹ��� ' style='font-size:9px'>")
				}	//-->
				
</script>
              <input name="date_insert" type="<? if($what=="edit"){echo"text";}else{echo"hidden";}?>" id="date_insert" value="<? if($what=="edit"){echo $row_new->date_insert;}else{echo date("Y/m/d")," ",date("H:i:s");}?>" >
              <strong> </strong> </font></td>
            <td rowspan="5"> 
              <? if(isset($_SESSION['user'])){
			  
			  if($what=="add"){$id=$id_new;}else{$id=id_edit; }
			  
			  $sql_service="select * from jobcom_service where id='$id_edit' ";
			  $result_service=mysql_query($sql_service);
			  $row_service=mysql_fetch_object($result_service);
			  ?>
              <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
                <tr> 
                  <td width="19%"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">�ѹ����Ѻ�ҹ</font></strong></td>
                  <td width="81%"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
                    <input name="datework" type="text" id="datework" value="<? echo $row_service->datework;?>" size="10">
                    <script language='JavaScript'>
	<!--
	 			 if (!document.layers) {
	   			 document.write("<input type=button onclick='popUpCalendar(this, form1.datework, \"yyyy/mm/dd\")' value=' �ѹ��� ' style='font-size:9px'>")
				}	//-->
				
</script>
                    </font></strong></td>
                </tr>
                <tr> 
                  <td><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">����ҳ���</font></strong></td>
                  <td><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
                    <input name="workday" type="text" id="workday" value="<? echo $row_service->workday;?>" size="10">
                    �ѹ / ��͹</font></strong></td>
                </tr>
                <tr> 
                  <td><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">Ǵ�.�������</font></strong></td>
                  <td><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
                    <input name="datefinal" type="text" id="datefinal" value="<? echo $row_service->datefinal;?>" size="10">
                    <script language='JavaScript'>
	<!--
	 			 if (!document.layers) {
	   			 document.write("<input type=button onclick='popUpCalendar(this, form1.datefinal, \"yyyy/mm/dd\")' value=' �ѹ��� ' style='font-size:9px'>")
				}	//-->
				
</script>
                    </font></strong></td>
                </tr>
                <tr> 
                  <td><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">ʶҹ�</font></strong></td>
                  <td><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
                    <input type="radio" name="commant" value="1" <? if($row_service->commant=="1"){echo"checked";}?>>
                    �ʹ��Թ��� 
                    <input type="radio" name="commant" value="2" <? if($row_service->commant=="2"){echo"checked";}?>>
                    �������º����</font></strong></td>
                </tr>
                <tr> 
                  <td><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">�������ҹ</font></strong></td>
                  <td> 
                    <? $sql_type="select * from jobcom_type ";
				  		$result_type=mysql_query($sql_type);

				  ?>
                    <select name="type">
                      <option selected>*** ���͡�������ҹ ***</option>
                      <? while($row_type=mysql_fetch_object($result_type)){?>
                      <option value="<? echo $row_type->id;?>" <? if($row_type->id==$row_service->type){echo"selected";}?> ><? echo $row_type->id," : ",$row_type->type;?></option>
                      <? } ?>
                    </select> 
					<? /*<input name="user_job" type="text" id="user_job" size="10" value="<? if($what=="edit"){echo $row_service->user_job;}else{echo $_SESSION['user'];}?>">*/?></td>
                </tr>
                <tr>
                  <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>����Ѻ�ҹ</strong></font></td>
                  <td>
                    <? $sql_login="select * from jobcom_login ";
				  		$result_login=mysql_query($sql_login);

				  ?>
                    <select name="user_job">
                      
                      <? while($row_login=mysql_fetch_object($result_login)){?>
                      <option value="<? echo $row_login->pwd;?>" <? if($row_login->pwd==$row_service->user_job){echo"selected";}?> ><? echo $row_login->fullname;?></option>
                      <? } ?>
                    </select></td>
                </tr>
              </table>
              <? } ?>
            </td>
          </tr>
          <tr> 
            <td><div align="right"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">�Ԩ���� 
                / �ҹ</font></strong></div></td>
            <td> <input name="head" type="text" id="head" value="<? if($what=="edit"){echo $row_new->head;}?>" size="30"></td>
          </tr>
          <tr> 
            <td><div align="right"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">��������´</font></strong></div></td>
            <td><div align="left"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
                <textarea name="datail" cols="50" rows="5" id="datail"><? if($what=="edit"){echo $row_new->datail;}?></textarea>
                </font></strong></div></td>
          </tr>
          <tr> 
            <td><div align="right"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">˹��§ҹ</font></strong></div></td>
            <td><div align="left"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
                <? $sql_plan="select * from jobcom_hospital_department  order by id ";
				   $result_plan=mysql_query($sql_plan);
				  
				   
			?>
                <select name="plan" id="plan">
                  <? while($row_plan=mysql_fetch_object($result_plan)){?>
                  <option value="<? echo $row_plan->id;?>" <? if($what==edit){  if($row_plan->id==$row_new->plan){echo"selected";}}?> ><? echo $row_plan->id," : ",$row_plan->name;?></option>
                  <? } ?>
                </select>
                <br>
                </font></strong></div></td>
          </tr>
          <tr> 
            <td><div align="right"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">�����</font></strong></div></td>
            <td><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">
              <input name="user_com" type="text" id="user2" value="<? if($what=="edit"){echo $row_new->user_com;}?>">
              </font></strong></td>
          </tr>
          <tr> 
            <td colspan="3"><div align="center"> 
                <input name="what" type="hidden" id="what" value="<? if($what<>""){echo $what;}else{echo"add";}?>" size="9">
                <font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
                <input type="submit" name="Submit" value="  �ѹ�֡  ">
                <input type="button" name="Submit2" value="  ¡��ԡ  " onClick="javascript :  history.back(); ">
                </font></div></td>
          </tr>
        </table>
       
      </form></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
</table>

</center>
</body>
</html>
