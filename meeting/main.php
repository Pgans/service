﻿<? 
@session_start();
foreach ( $_POST  as  $k => $v ) { ${$k} = $v; } 
foreach ( $_GET  as  $k => $v ) { ${$k} = $v; } 
if(!isset($_SESSION['Usernamep'])){echo $_SESSION['Usernamep'];}
?>
<?
		 include"config.php";
			$date=explode("-",$datejob1);
			$d=$date["2"];
			$m=$date["1"];
			$y=$date["0"];
			$datejob11=($y+543)."-".$m."-".$d;
			
			$date1=explode("-",$datejob2);
			$d1=$date1["2"];
			$m1=$date1["1"];
			$y1=$date1["0"];
			$datejob22=($y1+543)."-".$m1."-".$d1;
			$arr=array('0'=>'ช่วงเช้า','1'=>'ช่วงบ่าย','2'=>'ทั้งวัน');
?>
<head>
<title>Conference Room Reservation System : ระบบจองห้องประชุม โรงพยาบาลม่วงสามสิบ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/templatemo_style.css" rel="stylesheet" type="text/css" />
<script language='javascript' src='popcalendar.js'></script>
<script type="text/javascript">
function popupUploadImage(run) {
//alert(run);
window.open("popUp.php?ID="+run+"","name","top=300,left=450,height=550,width=450, status=1"); 
}
</script>
</head>
<body>
 <div align="center"><? include("inc/header.php")?></div>
<table align="center" width="930" border="0" cellpadding="0" cellspacing="0" background="imag/mainpage.gif">

  <tr> 
    <form name="form1" method="post" action="main.php?c=1&who=1">
      <td colspan="3"> <div align="center"><font color="#ff0000" size="2"><strong>ช่วงวันที่ 
          <input name="datejob1" type="text" id="datejob1" value="<? echo $datejob1;?>" size="9">
          <script language='JavaScript'>
	<!--
	 			 if (!document.layers) {
	   			 document.write("<input type=button onclick='popUpCalendar(this, form1.datejob1, \"yyyy-mm-dd\")' value=' วันที่ ' style='font-size:9px'>")
				}	//-->
				
</script>
          ถึง 
          <input name="datejob2" type="text" id="datejob2" value="<? echo $datejob2;?>" size="9">
          <script language='JavaScript'>
	<!--
	 			 if (!document.layers) {
	   			 document.write("<input type=button onclick='popUpCalendar(this, form1.datejob2, \"yyyy-mm-dd\")' value=' วันที่ ' style='font-size:9px'>")
				}	//-->
				
</script>
          </strong></font> <strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
          <input name="Submit" type="submit" value="แสดง">
          </font></strong>
          <input name="showall" type="submit" id="showall" value="แสดงทั้งหมด" />
      </div></td>
    </form>
  </tr>
  <tr> 
    <td>
	<? 
	$list_page = 15;
	if (empty($page)){
		$page=1;
	}
		//if($orderby==""){$orderby="jobcom.id";}
	// ติดต่อ database เพื่ออ่านข้อมูล	
	// หาจำนวนหน้าทั้งหมด
	if($Submit){
	$sql_total= "select ID from book where date_book between '$datejob11'and'$datejob22'  ";
	}else{
	 $sql_total= "select * from book  ";
	}
	$result_total = mysql_query($sql_total);

	$NRow = mysql_num_rows($result_total);
	$rt = $NRow%$list_page;
	if($rt!=0) { 
		$totalpage = floor($NRow/$list_page)+1; 
	}
	else {
		$totalpage = floor($NRow/$list_page); 
	}
	$goto = ($page-1)*$list_page;
	
	//-------------------------------------------------------------------------------------------------
		/*if($showall){
	$sql_total= "select ID from book where date_book between '$datejob11'and'$datejob22'  ";
	}else{
	$sql_total= "select ID from book  ";
	}
	$result_total = mysql_query($sql_total);
	$NRow = mysql_num_rows($result_total);
	$rt = $NRow%$list_page;
	if($rt!=0) { 
		$totalpage = floor($NRow/$list_page)+1; 
	}
	else {
		$totalpage = floor($NRow/$list_page); 
	}
	$goto = ($page-1)*$list_page;
	
	*/
	//-------------------------------------------------------------------------------
				
						//$sql1="select  * from jobtana_company  order by id_com asc limit $goto,$list_page";
	
	if($Submit){
	 $sql="select * from  book  where date_book between '$datejob11'and'$datejob22'  order by date_book desc limit $goto,$list_page";
	}else{
	$sql="select * from book  order by date_book desc limit $goto,$list_page";
	}
	//echo $sql;
			$result=mysql_query($sql);
			?>
      </strong></font></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><table width="930" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#6464FF"> 
    <td width="4%" height="23"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">เลขที่</font></strong></font></div></td>
    <td width="22%"><div align="center"><font color="#FFFFFF"><strong>กิจกรรม/งาน</font></strong></font></div></td>
    <td width="7%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">วดป.ที่ต้องการ</font></strong></font></div></td>
	<td width="7%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">ช่วงเวลา</font></strong></font></div></td>
    <td width="15%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">หน่วยงาน</font></strong></font></div></td>
    <td width="12%" bgcolor="#6464FF"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">ผู้แจ้ง</font></strong></font></div></td>
    <? if(isset($_SESSION['user'])){?>
    <? } ?>
  </tr>
  <tr> 
    <? if($page==1){
		$i=1;
	}else{
	$i=(($list_page*($page-1))+1);
	}
	 while($row=mysql_fetch_array($result)){
	$u=$row['user_name'];
	 ?> 
    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><?=$i++;?></font></td>
    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif">
	<? if(isset($_SESSION['Usernamep'])){?>
	<a href="#" title="<? echo $row['detail'];?>"onClick="popupUploadImage(<?=$row['ID'];?>)"><? echo $row['detail'];?></a>
	<? }else{?>
	<? echo $row['detail'];?>
	<? } ?>
	</font></td>
    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $row['date_book'];?></font></td>
	<td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $arr[$row['period']];?></font></td>
    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> <? 
	$sql_plan="select * from puser, book where puser.user_name =book.user_name and ID='$row[ID]' ";
	$result_plan=mysql_query($sql_plan);
	$row_plan=mysql_fetch_array($result_plan);
	echo " : ",$row_plan['user_detail'];
	
	?> </font></td>
    <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $row['By_user'];?></font></td>
    <? if(isset($_SESSION['user'])){?>
    <? } ?>
  </tr>
  <? } ?>
  <tr><td colspan="5"><? 		
					if($page>1 && $page<=$totalpage) {
			$prevpage = $page-1;
			echo "\t<font color=blue size=2 face='MS Sans Serif'><a href='main.php?c=1&Category=$Category&page=$prevpage&all=all&by=number'>[หน้าก่อน = $prevpage]</a></font>\n";
		}


		echo "\t <font color=blue size=2 face='MS Sans Serif'>กำลังแสดงหน้าที่ $page/$totalpage </font>\n";

		if($page!=$totalpage) {
			$nextpage = $page+1;
			echo "\t<font color=blue size=2 face='MS Sans Serif'><a href='main.php?c=1&Category=$Category&page=$nextpage&all=all&by=number'>[หน้าถัดไป = $nextpage]</a></font>\n";
		}echo"<br>";
		// วนลูปแสดงเลขหน้าทั้งหมด
		for($i=1 ; $i<$page ; $i++) {
			echo "\t<font color=blue size=2 face='MS Sans Serif'><a href='main.php?c=1&Category=$Category&page=$i&all=all&by=number'>$i</a> </font>\n";
		}
		echo "\t<font size=2 color=red face='MS Sans Serif'><b>$page</b></font> \n";
		for($i=$page+1 ; $i<=$totalpage ; $i++) {
			echo "\t<font size=2 color=blue face='MS Sans Serif'><a href='main.php?c=1&Category=$Category&page=$i&all=all&by=number'>$i</a></font> \n";
		}?></td></tr>
</table>
</table>

<?
if($what=="del"){
echo "<script language='javascript'>
				if (confirm('ต้องการลบข้อมูลของ  คนที่  $id  ครั้งที่  $head  ใช่หรือไม่ ?')) {					
					var	link='add_what.php?what=del&id=$id'
					window.location=link
				}else{
								alert('  ยกเิลิกการลบข้อมูลนี้  ')
								history.back()
							}
								</script>";
}

?>
  <div align="center"> <? include("inc/footer.php");?></div>
</body>
