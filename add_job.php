<?
session_start();
if(!isset($_SESSION['user'])){}
	//header("Location:index.php?show=admin");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>เพิ่มข้อมูล</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<script language='javascript' src='popcalendar.js'></script>
<LINK 
media=screen href="style.css" type=text/css 
rel=stylesheet>
<STYLE type=text/css>
.mu_register {
	MARGIN: 0px auto; WIDTH: 90%
}
.mu_register FORM {
	MARGIN-TOP: 2em
}
.mu_register .error {
	BORDER-RIGHT: #cc0000 1px solid; PADDING-RIGHT: 10px; BORDER-TOP: #cc0000 1px solid; PADDING-LEFT: 10px; FONT-WEIGHT: 700; BACKGROUND: #ffebe8; PADDING-BOTTOM: 10px; BORDER-LEFT: #cc0000 1px solid; COLOR: #333333; PADDING-TOP: 10px; BORDER-BOTTOM: #cc0000 1px solid
}
.mu_register #submit {
	FONT-SIZE: 24px; MARGIN: 5px 0px; WIDTH: 100%
}
.mu_register #blog_title {
	FONT-SIZE: 24px; MARGIN: 5px 0px; WIDTH: 100%
}
.mu_register #user_email {
	FONT-SIZE: 24px; MARGIN: 5px 0px; WIDTH: 100%
}
.mu_register #blogname {
	FONT-SIZE: 24px; MARGIN: 5px 0px; WIDTH: 100%
}
.mu_register #user_name {
	FONT-SIZE: 24px; MARGIN: 5px 0px; WIDTH: 100%
}
.mu_register .prefix_address {
	DISPLAY: inline; FONT-SIZE: 18px
}
.mu_register .suffix_address {
	DISPLAY: inline; FONT-SIZE: 18px
}
.mu_register LABEL {
	DISPLAY: block; FONT-WEIGHT: 700; FONT-SIZE: 15px; MARGIN: 10px 0px
}
.mu_register LABEL.checkbox {
	DISPLAY: inline
}
.mu_register .mu_alert {
	BORDER-RIGHT: #e6db55 1px solid; PADDING-RIGHT: 10px; BORDER-TOP: #e6db55 1px solid; PADDING-LEFT: 10px; FONT-WEIGHT: 700; BACKGROUND: #ffffe0; PADDING-BOTTOM: 10px; BORDER-LEFT: #e6db55 1px solid; COLOR: #333333; PADDING-TOP: 10px; BORDER-BOTTOM: #e6db55 1px solid
}
.style5 {font-family: tahoma; font-weight: bold; font-size: 12px; }
.style7 {color: #990000}
</STYLE>
</head>
<? include"config.php";?>
<body>
<DIV class=mu_register>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="25" background="imag/mainpage.gif"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>&nbsp;<font face="tahoma">&nbsp;<font size="3">เพิ่มข้อมูล</font></font></strong></font></td>
  </tr>
  <tr> 
    <td><form name="form1" method="post" action="add_what.php">
        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="15%"><div align="right"><font face="tahoma"><strong><font size="2">เลขที่</font></strong></font></div></td>
            <td width="85%">
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
			<input name="id" type="text" class="mu_register" id="id" value="<? if($what=="edit"){echo $row_new->id;}else{echo"Auto";}?>" size="10" readonly="">
			<input name="id" type="hidden" id="id" value="<? if($what=="edit"){echo $row_new->id;}else{echo $id;}?>" size="10" readonly=""></td>
          </tr>
          <tr> 
            <td><div align="right"><font face="tahoma"><strong><font size="2">วดป.ที่แจ้ง</font></strong></font></div></td>
            <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> <strong> 
              <input name="datejob" type="text" id="datejob" value="<? if($what=="edit"){echo $row_new->datejob;}else{echo date("Y/m/d");}?>" size="10">
              </strong> 
              <script language='JavaScript'>
	<!--
	 			 if (!document.layers) {
	   			 document.write("<input type=button onclick='popUpCalendar(this, form1.datejob, \"yyyy/mm/dd\")' value=' วันที่ ' style='font-size:9px'>")
				}	//-->
				
</script>
              <strong>วดป.ที่ต้องการ 
              <input name="dateline" type="text" id="dateline" value="<? if($what=="edit"){echo $row_new->dateline;}else{echo date("Y/m/d");}?>" size="10">
              </strong> 
              <script language='JavaScript'>
	<!--
	 			 if (!document.layers) {
	   			 document.write("<input type=button onclick='popUpCalendar(this, form1.dateline, \"yyyy/mm/dd\")' value=' วันที่ ' style='font-size:9px'>")
				}	//-->
				
</script>
              <input name="date_insert" type="<? if($what=="edit"){echo"text";}else{echo"hidden";}?>" id="date_insert" value="<? if($what=="edit"){echo $row_new->date_insert;}else{echo date("Y/m/d")," ",date("H:i:s");}?>" >
              <strong> </strong> </font></td>
          </tr>
          <tr> 
            <td><div align="right"><font face="tahoma"><strong><font size="2">กิจกรรม 
                / ปัญหา </font></strong></font></div></td>
            <td> <input name="head" type="text" class="mu_register" id="head" value="<? if($what=="edit"){echo $row_new->head;}?>" size="30"></td>
          </tr>
          <tr> 
            <td><div align="right"><font face="tahoma"><strong><font size="2">รายละเอียด</font></strong></font></div></td>
            <td><div align="left"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
                <textarea name="datail" cols="50" rows="5" class="mu_register" id="datail"><? if($what=="edit"){echo $row_new->datail;}?></textarea>
                </font></strong></div></td>
          </tr>
          <tr> 
            <td><div align="right"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">หน่วยงาน</font></strong></div></td>
            <td><div align="left"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
                <? $sql_plan="select * from jobcom_hospital_department  order by id ";
				   $result_plan=mysql_query($sql_plan);
				  
				   
			?>
                <select name="plan" class="mu_register" id="plan">
                  <? while($row_plan=mysql_fetch_object($result_plan)){?>
                  <option value="<? echo $row_plan->id;?>" <? if($what==edit){  if($row_plan->id==$row_new->plan){echo"selected";}}?> ><? echo $row_plan->id," : ",$row_plan->name;?></option>
                  <? } ?>
                </select>
                <br>
                </font></strong></div></td>
          </tr>
          <tr> 
            <td><div align="right"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">ผู้แจ้ง</font></strong></div></td>
            <td><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">
              <input name="user_com" type="text" class="mu_register" id="user2" value="<? if($what=="edit"){echo $row_new->user_com;}?>">
              </font></strong></td>
          </tr>
          <tr>
            <td colspan="3"><p>&nbsp;</p>
            <p align="right"><font size="3" face="MS Sans Serif, Tahoma, sans-serif"><strong>สำหรับผู้ดูแลระบบ</strong></font></p></td>
          </tr>
          <tr>
            <td colspan="3"><? if(isset($_SESSION['user'])){
			  
			  if($what=="add"){$id=$id_new;}else{$id=id_edit; }
			  
			  $sql_service="select * from jobcom_service where id='$id_edit' ";
			  $result_service=mysql_query($sql_service);
			  $row_service=mysql_fetch_object($result_service);
			  ?>
              <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="19%"><div align="center"><span class="style5">วันที่รับงาน</span></div></td>
                  <td width="81%"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">
                    <input name="datework" type="text" class="mu_register" id="datework" value="<? echo $row_service->datework;?>" size="10">
                    <script language='JavaScript'>
	<!--
	 			 if (!document.layers) {
	   			 document.write("<input type=button onclick='popUpCalendar(this, form1.datework, \"yyyy/mm/dd\")' value=' วันที่ ' style='font-size:9px'>")
				}	//-->
				
              </script>
                  </font></strong></td>
                </tr>
                <tr>
                  <td><div align="center"><span class="style5">การแก้ปัญหา/ทำกิจกรรม</span></div></td>
                  <td><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">
                    <input name="workday" type="text" class="mu_register" id="workday" value="<? echo $row_service->workday;?>" size="10">
                    วัน / เดือน</font></strong></td>
                </tr>
                <tr>
                  <td><div align="center"><span class="style5">วดป.ที่เสร็จ</span></div></td>
                  <td><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">
                    <input name="datefinal" type="text" class="mu_register" id="datefinal" value="<? echo $row_service->datefinal;?>" size="10">
                    <script language='JavaScript'>
	<!--
	 			 if (!document.layers) {
	   			 document.write("<input type=button onclick='popUpCalendar(this, form1.datefinal, \"yyyy/mm/dd\")' value=' วันที่ ' style='font-size:9px'>")
				}	//-->
				
              </script>
                  </font></strong></td>
                </tr>
                <tr>
                  <td><div align="center"><span class="style5">สถานะ</span></div></td>
                  <td><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">
                    <input type="radio" name="commant" value="1" <? if($row_service->commant=="1"){echo"checked";}?>>
                    รอดำเนินการ
                    <input type="radio" name="commant" value="2" <? if($row_service->commant=="2"){echo"checked";}?>>
                    เสร็จเรียบร้อย</font></strong></td>
                </tr>
                <tr>
                  <td height="44"><div align="center"><span class="style5">ประเภทงาน</span></div></td>
                  <td><? $sql_type="select * from jobcom_type ";
				  		$result_type=mysql_query($sql_type);

				  ?>
                      <select name="type" class="mu_register">
                        <option selected>*** เลือกประเภทงาน ***</option>
                        <? while($row_type=mysql_fetch_object($result_type)){?>
                        <option value="<? echo $row_type->id;?>" <? if($row_type->id==$row_service->type){echo"selected";}?> ><? echo $row_type->id," : ",$row_type->type;?></option>
                        <? } ?>
                      </select>
                      <? /*<input name="user_job" type="text" id="user_job" size="10" value="<? if($what=="edit"){echo $row_service->user_job;}else{echo $_SESSION['user'];}?>">*/?></td>
                </tr>
                <tr>
                  <td><div align="center"><span class="style5">ผู้รับงาน</span></div></td>
                  <td><? $sql_login="select * from jobcom_login ";
				  		$result_login=mysql_query($sql_login);

				  ?>
                      <select name="user_job" class="mu_register">
                        <? while($row_login=mysql_fetch_object($result_login)){?>
                        <option value="<? echo $row_login->pwd;?>" <? if($row_login->pwd==$row_service->user_job){echo"selected";}?> ><? echo $row_login->fullname;?></option>
                        <? } ?>
                    </select></td>
                </tr>
              </table>
              <? } ?></td>
          </tr>
          <tr> 
            <td colspan="3"><div align="center"> 
                <p>&nbsp;                  </p>
                <p>
                  <input name="what" type="hidden" id="what" value="<? if($what<>""){echo $what;}else{echo"add";}?>" size="9">
                  <font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
                    <input name="Submit" type="submit" class="mu_register" value="  บันทึก  ">
                  </font></p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div></td>
          </tr>
        </table>
       
      </form></td>
  </tr>
  <tr> 
    <td><div align="center" class="style7">Computer Service Muangsamsib. ผู้รับผิดชอบ:Chatree Boontha 081-7605885 or 508 </div></td>
  </tr>
</table>
</DIV>
</center>
</body>
</html>
