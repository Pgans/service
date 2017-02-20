<?
session_start();
foreach ( $_POST  as  $k => $v ) { ${$k} = $v; } 
foreach ( $_GET  as  $k => $v ) { ${$k} = $v; } 
if(!isset($_SESSION['Usernamep'])){echo $_SESSION['Usernamep'];}
//	header("Location:index.php?show=admin");
//include("inc/connect.php");
//echo "user=".$U=$_SESSION['Usernamep']
?><head>

<script type="text/javascript">
function popupUploadImage(run,run2,run3,run4) {
//alert(run2);
window.open("popUploadImages.php?day="+run+"&month="+run2+"&year="+run3+"&ID="+run4+"","name","top=300,left=450,height=550,width=450, status=1"); 
}
</script>
<? 
if($month==""){$month=date("m");}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>ปฎิทินการรับจองห้องประชุม <? $today = getdate();	$yeardate=$today[year]+543;$monthnew=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฏาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");echo "วันที่  $today[mday]-","",$monthnew[$month-1];echo "\t\t", " -$yeardate";?></title></head>
<?
// ฟังก์ชันแสดงปฏิทิน โดยรับชื่อเดือน และปีที่ต้องการมาจาก 
function mycal_show_month_day($year, $month, $day)
	{
		return($day);
	}
function mycal_show_month($day_callback, $year = 0, $month = 0)
	{
		// กำหนดค่าดีฟอลต์ของเดือน ถ้าไม่กำหนดจะแสดงเดือนปัจจุบัน 
		if($month == 0)
			{
				$month = date( "m");
			}

		// กำหนดค่าดีฟอลต์ของปี ถ้าไม่กำหนดจะแสดงปีปัจจุบัน
		if($year == 0)
			{
				$year = date( "Y");
			}
    
		// กำหนดเดือนก่อนหน้านี้ และเดือนถัดไป
		$prev_month = date( "m", mktime(0, 0, 0, $month - 1, 1, $year));
		$next_month = date( "m", mktime(0, 0, 0, $month + 1, 1, $year));

		// กำหนดปีก่อนหน้านี้ และปีถัดไป
		$prev_year = date( "Y", mktime(0, 0, 0, $month - 1, 1, $year));
		$next_year = date( "Y", mktime(0, 0, 0, $month + 1, 1, $year));
	?>



<style type="text/css">
<!--
body {  margin: 0px  0px; padding: 0px  0px}
a:link { color: #005CA2; text-decoration: none}
a:visited { color:#005CA2 ; text-decoration: none}
a:active { color: #E1EBF4; text-decoration: none}
a:hover { color: #0099FF; text-decoration: underline}
-->
</style>
	<!--<style TYPE="text/css">
		TD.Some 
			{
				font-family :Tahoma, Verdana, Arial; 
				font-size :12px; 
				color :#000000; 
				font-weight :normal;
				height:80px;
			}
		A
			{
				font-family :Tahoma, Verdana, Arial;
				font-size :12px;
				color :#000000;
				font-weight :normal;
				text-decoration: none;
			}
    
		</style>-->

<body><div align="center"> <font size="2" face="MS Sans Serif, Tahoma, sans-serif"> <? include("inc/header.php"); 
?></font></div> 
<table width="930" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>   
    <td >   
      <table width="930" border="1" cellpadding="0" cellspacing="0" height="80"  align="center">
        <tr   > 
          <td align="center" valign="top" background="imag/bg_logo.gif"> <a href=" 
								<?	//กำหนดส่วนอ้างอิง
									echo (basename($GLOBALS[ "PHP_SELF"]));
									echo ( "?month=$prev_month");
									echo ( "&year=$prev_year");   
									echo ( "&show=calender");           
								?>" class="noevent">
            <img src="images/28.png" border="0"></a> </td>
          <td colspan="5" align="center" valign="top" background="imag/bg_logo.gif" ><font size="3" face="MS Sans Serif, Tahoma, sans-serif"> 
            <?
									//echo (date( "F", mktime(0, 0, 0, $month, 1, $year)). " $year");
									$monthnew=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฏาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
									echo "<br><font size=3><b>ปฎิทินการรับจองห้องประชุม เดือน ",$monthnew[$month-1];echo "\t\t",$yy = date( " $year"+543),"</font>";
								?>
								<input type="hidden" name="run2" value="<?=$month;?>" />
            </font> </td>
          <td align="center" valign="top" background="imag/bg_logo.gif"> <a href=" 
								<?
									echo (basename($GLOBALS[ "PHP_SELF"]));
									echo ( "?month=$next_month");
									echo ( "&year=$next_year");
									echo ( "&show=calender");   
								?>" class="noevent">
            <img src="images/23.png" border="0"></a> </td>
        </tr>
        <tr> 
          <td width="8%" bgcolor="#0066CC" class="SOME"> <div align="center"><font color=#FFFFFF size="2" face="MS Sans Serif, Tahoma, sans-serif"> 
              <strong>อาทิตย์</strong> </font></div></td>
          <td width="8%" bgcolor="#0066CC" class="SOME"> <div align="center"><strong><font color="#FFFFFF" size="2" face="MS Sans Serif, Tahoma, sans-serif">จันทร์</font></strong></div></td>
          <td width="8%" bgcolor="#0066CC" class="SOME"> <div align="center"><strong><font color="#FFFFFF" size="2" face="MS Sans Serif, Tahoma, sans-serif">อังคาร</font></strong></div></td>
          <td width="8%" bgcolor="#0066CC" class="SOME"> <div align="center"><strong><font color="#FFFFFF" size="2" face="MS Sans Serif, Tahoma, sans-serif">พุธ</font></strong></div></td>
          <td width="8%" bgcolor="#0066CC" class="SOME"> <div align="center"><strong><font color="#FFFFFF" size="2" face="MS Sans Serif, Tahoma, sans-serif">พฤหัสบดี</font></strong></div></td>
          <td width="8%" bgcolor="#0066CC" class="SOME"> <div align="center"><strong><font color="#FFFFFF" size="2" face="MS Sans Serif, Tahoma, sans-serif">ศุกร์</font></strong></div></td>
          <td width="8%" bgcolor="#0066CC" class="SOME"> <div align="center"><font color="#FFFFFF" size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>เสาร์</strong></font></div></td>
        </tr>
        <?
						$day = 1 - date( "w", mktime(0, 0, 0, $month, 1, $year));
						$days_in_month = date( "t", mktime(0, 0, 0, $month, 1, $year));

						// วนรอบทุกวันใน 1 เดือน
						while($day <= $days_in_month)
							{  
								echo ( "<tr>");
								
								// 1 แถวมี 7 วัน 
				
								for ($j=1; $j<=7; $j++)
								{  include"config.php";	
						?>
    <td align='left' valign='top'   height="80" class="Some"       
								<? 
										if (($day==$today[mday]) and ($month==$today[mon]) and ($year==$today[year]))
										{?>
									bgcolor="#95FFFF" 
									bgco
									<?	}else{?>
										background="imag/mainpage.gif"  
										<?
										}
										 ?>   
									</td>  
          <?		
									// กำหนดค่าเพื่อรับค่าวัน-เดือน-ปี ปัจจุบัน เพื่อเปรียบเทียบ ถ้าเป็นวัน-เดือน-ปีปัจจุบันจะแสดงตัวสีแดง
									$today = getdate();
									$yeardate=$today[year]+543;
									//echo"$day-$today[mon]-$today[year]";
									$datego_in="$today[year]-$month-$day";
									$sql="select * from book  where date_book ='$yeardate-$month-$day'  order by date_book ,period asc";
									$result=mysql_query($sql);
									$result2=mysql_query($sql);
									$m = mysql_num_rows($result2);
									$mm= mysql_fetch_row($result2);
									$X = $mm[0];
									$Y = $mm[3];
									$mm[2];
									
									/*echo"<a href='list_month.php?date=$day&month=$month&year=$today[year]' target='mainFrame' >";*/
									if (($day==$today[mday]) and ($month==$today[mon]) and ($year==$today[year]))
										{
											echo "<font color=\"#000000\"><B>";
										}
										//$date=$day;
										
										?>  <input type="hidden" name="run" value="<?=$day;?>" />
										
									 <a href='#' <? if(($m<8)and($Y!=8)and($_SESSION['Usernamep']!='')){?>onclick='popupUploadImage("<? echo $day; ?>","<? echo $month;?>","<? echo $yy;?>","")' >  <? } echo "<font color=\"#0033FF\"	 size='2' face='MS Sans Serif, Tahoma, sans-serif'>";						 
									echo (($day <= $days_in_month && $day > 0) ? $day_callback($year, $month, $day):   "&nbsp;");?></a>
							<?		while($object=mysql_fetch_array($result)){
							$detail_meeting=$object['detail'];
							$det=substr($detail_meeting, 0, 12); 
							$ID=$object['ID'];
							$PD=$object['period'];
							//$P=$object['period'];
									if ($day<1){ $day=$day+0;echo"<font color=FFFFFF face='MS Sans Serif, Tahoma, sans-serif' size=2>";}
									else{ if($PD=='0'){echo"<br><div align='absmiddle'><img src='logo/AM.gif'>&nbsp;";}elseif($PD=='1'){echo"<br><div align='absmiddle'><img src='logo/PM.gif'>&nbsp;";}else{echo"<br><div align='left'><img src='logo/full.gif'>&nbsp;";} 

									}?>
								<a href='#' onclick='popupUploadImage("<? echo $day; ?>","<? echo $month; ?>","<? echo $yy; ?>","<? echo $ID; ?>")'>  
                                
								<font color=0033FF face='MS Sans Serif, Tahoma, sans-serif' size=2>           
								<? 
									echo $det."..";
									?>
									</font>
									<?
									echo $ID;
									//echo $PD;
									if ($day<1){ $day=$day+0;echo"<font color=#CCCCFF face='MS Sans Serif, Tahoma, sans-serif' size=2>";}
									echo "<font size='2' face='MS Sans Serif, Tahoma, sans-serif'>",$object->head,"<br>",$object->user_com,"</font></a>";} 
								?>
        </td> 
        <?
						
						$day++;
						
						echo"";
						if ($day>date("t")){echo"<font color=FFFFFF></font>";}
						}
					echo ( "</tr>");
					
				}
			?>
        </tr>
      </table>
      <?
    
		return(true);
	}
// ฟังก์ชันเพื่อแสดงผล โดยรับค่าเดือน-ปี
mycal_show_month( "mycal_show_month_day", $year, $month);
?>
    </td>
  </tr>
</table>
<div align="center">  <? include("inc/footer.php");?></div>
