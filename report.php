<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<script language='javascript' src='popcalendar.js'></script>
<script language='javascript' >
function check_type_report(text)
{
var check_type_report=text;
if(check_type_report=="รายงานรับแจ้งฯ แยกตามประเภทปัญหา"){
document.form1.type.disabled=true
}else{document.form1.type.disabled=false;}

//document.form1.graph2.disabled=true;
//document.form1.graph3.disabled=true;
//document.form1.year2.disabled=true;
//document.form1.year3.disabled=true;
//var showtable=document.form1.showtable.value;
//alert('check_moo='+check_moo);
//document.form1.date_to.disabled=false;
//var targeturl='fusion_showall.php?plan='+check_type_report;
//				window.location=targeturl 
}
</script>
<script language='javascript' >
function check(text)
{
var check=text;
var type_job=document.form_year.type_job.value;
var graph=document.form_year.graph.value;
//alert('subject='+subject);
var targeturl='index.php?show=report&check='+text+'&type_job='+type_job+'&graph='+graph;

window.location=targeturl ;
}
</script>
</head>
<? include"config.php";
$year_old=explode("=",$check);
	  $show=$year_old[0]." ถึง ".$year_old[1];
	  $a1=$year_old[0]-543;
	  $a2=$year_old[1]-543;
	  
?>
<body>
<?
if($select=="yes"){
echo "<script language='javascript'>
			var targeturl='index.php?show=report&type_job=select_report&date_begin=$date_begin&date_out=$date_out&type_report=$type_report&type=$type&plan=$plan&graph=$graph';
			window.location=targeturl 
			</script>";
}else{
 ?>
<table width="50%" height="127" border="1" align="left" cellpadding="0" cellspacing="0">
  <form action="" name="form_year">
    <tr> 
      <td width="40%" height="125"><div align="center"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
          รายงานปีงบประมาณ<br>
          <select name="type_job" id="select2" >
            <option  value="" <? if($type_job==""){echo "selected";} ?>></option>
            <option  value="1" <? if($type_job=="1"){echo "selected";} ?>>รายงานรับแจ้งฯ 
            แยกตามประเภทปัญหา</option>
            <option  value="2" <? if($type_job=="2"){echo "selected";} ?>>รายงานรับแจ้งฯ 
            แยกตามฝ่ายงาน</option>
            <option  value="3" <? if($type_job=="3"){echo "selected";} ?>>รายงานรับแจ้งฯ 
            แยกตามผู้รับงาน</option>
          </select>
          <br>
          <font size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>เลือกกราฟ</strong></font><br>
          <select name="graph" id="select4">
            <option  value="" <? if($graph==""){echo "selected";} ?> ></option>
            <option value="Pie2D" <? if($graph=="Pie2D"){echo "selected";} ?>>กราฟวงกลม2D</option>
            <option value="Pie3D" <? if($graph=="Pie3D"){echo "selected";} ?>>กราฟวงกลม3D</option>
            <option value="Column2D" <? if($graph=="Column2D"){echo "selected";} ?>>กราฟแท่ง2D</option>
            <option value="Column3D" <? if($graph=="Column3D"){echo "selected";} ?>>กราฟแท่ง3D</option>
            <option value="Line" <? if($graph=="Line"){echo "selected";} ?>>กราฟเส้น2D</option>
            <option value="Area2D" <? if($graph=="Area2D"){echo "selected";} ?>>กราฟเส้น3D</option>
            <option value="Bar2D" <? if($graph=="Bar2D"){echo "selected";} ?>>กราฟแท่งแนวนอน2D</option>
          </select>
          <br>
          ปีงบประมาณ<br>
          <?  $year_new=date("Y")+543; 
			?>
          <? $a=2552;?>
          <select name="year" onChange="return check(this.value)" >
            <option value=""></option>
            <?   for($i=2553;$i<=$year_new;$i++){?>
            <option value="<? echo $a."/10/01","=",$i."/09/30";?>" <? if($check=="$a/10/01=$i/09/30"){ echo "selected";}?> ><? echo "1 ต.ค. ",$a," - ","30 ก.ย. ",$i;?></option>
            <? $a=$a+1; } ?>

          </select>
          </font></strong></div></td>
    </tr>
  </form>
</table>


<table width="50%" height="127" border="1" cellpadding="0" cellspacing="0">
  <tr> <form name="form1" method="post" action="report.php?show=report&select=yes">
    <td height="125">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td><div align="left"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>ช่วงวันที่ 
                </strong></font><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
                </font> <font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
                </font></strong></div></td>
            <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong> 
              <input name="date_begin" type="text" id="date_begin" size="9" value="<? if($date_begin<>""){echo $date_begin;}else{echo date("Y-m-"),"1";}?>">
              <script language='JavaScript'>
	<!--
	 			 if (!document.layers) {
	   			 document.write("<input type=button onclick='popUpCalendar(this, form1.date_begin, \"yyyy-mm-dd\")' value=' วันที่ ' style='font-size:9px'>")
				}	//-->
				
</script>
              ถึงวันที่ 
              <input name="date_out" type="text" id="date_out" value="<? if($date_out<>""){echo $date_out;}else{echo date("Y-m-d");}?>" size="9">
              <script language='JavaScript'>
	<!--
	 			 if (!document.layers) {
	   			 document.write("<input type=button onclick='popUpCalendar(this, form1.date_out, \"yyyy-mm-dd\")' value=' วันที่ ' style='font-size:9px'>")
				}	//-->
				
</script>
              </strong></font></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">รายงาน</font></strong></td>
            <td width="86%" colspan="2"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
              <select name="type_report" id="type_report" onChange="return check_type_report(this.value)">
                <option  value="" <? if($type_report==""){echo "selected";} ?>>***เลือกประเภทรายงาน***</option>
                <option  value="รายงานรับแจ้งฯ แยกตามประเภทปัญหา" <? if($type_report=="รายงานรับแจ้งฯ แยกตามประเภทปัญหา"){echo "selected";} ?>>รายงานรับแจ้งฯ 
                แยกตามประเภทปัญหา</option>
                <option  value="รายงานรับแจ้งฯ แยกตามฝ่ายงาน" <? if($type_report=="รายงานรับแจ้งฯ แยกตามฝ่ายงาน"){echo "selected";} ?>>รายงานรับแจ้งฯ 
                แยกตามฝ่ายงาน</option>
                <option  value="รายงานรับแจ้งฯ แยกตามผู้รับงาน" <? if($type_report=="รายงานรับแจ้งฯ แยกตามผู้รับงาน"){echo "selected";} ?>>รายงานรับแจ้งฯ 
                แยกตามผู้รับงาน</option>
              </select>
              </font></strong></td>
          </tr>
          <tr> 
            <td width="14%"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">ฝ่าย/งาน</font></strong></td>
            <td colspan="2"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
              <? $sql_plan="select * from jobcom_hospital_department  order by id ";
				   $result_plan=mysql_query($sql_plan);
				  
				   
			?>
              <select name="plan" id="plan">
                <option value="" selected >***เลือกหน่วยงานทั้งหมด***</option>
                <? while($row_plan=mysql_fetch_object($result_plan)){?>
                <option value="<? echo $row_plan->id;?>" <? if($row_plan->id==$plan){echo"selected";}?> ><? echo $row_plan->id," : ",$row_plan->name;?></option>
                <? } ?>
              </select>
              </font></strong></td>
          </tr>
          <tr> 
            <td><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">ประเภทปัญหา</font></strong></td>
            <td colspan="2"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
              <? $sql_type="select * from jobcom_type ";
				  		$result_type=mysql_query($sql_type);

				  ?>
              <select name="type">
                <option selected value="">*** เลือกทั้งหมดของประเภทงาน ***</option>
                <? while($row_type=mysql_fetch_object($result_type)){?>
                <option value="<? echo $row_type->id;?>" <? if($row_type->id==$type){echo"selected";}?> ><? echo $row_type->id," : ",$row_type->type;?></option>
                <? } ?>
              </select>
              </font></strong></td>
          </tr>
          <tr> 
            <td height="24"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>เลือกกราฟ</strong></font></font></td>
            <td colspan="2"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
              <select name="graph" id="select">
                <option  value="" <? if($graph==""){echo "selected";} ?> >***เลือกรูปแบบกราฟ***</option>
                <option value="Pie2D" <? if($graph=="Pie2D"){echo "selected";} ?>>กราฟวงกลม2D</option>
                <option value="Pie3D" <? if($graph=="Pie3D"){echo "selected";} ?>>กราฟวงกลม3D</option>
                <option value="Column2D" <? if($graph=="Column2D"){echo "selected";} ?>>กราฟแท่ง2D</option>
                <option value="Column3D" <? if($graph=="Column3D"){echo "selected";} ?>>กราฟแท่ง3D</option>
                <option value="Line" <? if($graph=="Line"){echo "selected";} ?>>กราฟเส้น2D</option>
                <option value="Area2D" <? if($graph=="Area2D"){echo "selected";} ?>>กราฟเส้น3D</option>
                <option value="Bar2D" <? if($graph=="Bar2D"){echo "selected";} ?>>กราฟแท่งแนวนอน2D</option>
              </select>
              <input type="submit" name="Submit" value="ตกลง">
              </font></strong></td>
          </tr>
         
        </table>
    </td>  </form>
  </tr>
</table>
<? } ?>
</body>
</html>
