<?
session_start();
foreach ( $_POST  as  $k => $v ) { ${$k} = $v; } 
foreach ( $_GET  as  $k => $v ) { ${$k} = $v; } 
if(!isset($_SESSION['Usernamep'])){echo $_SESSION['Usernamep'];}
//	header("Location:index.php?show=admin");
include("inc/connect.php");
?>

<?

//$ARR_UID=array('manager'=>'ช่วงเช้า',"ช่วงบ่าย","ทั้งวัน");
function thai_date($day){
			$day2=explode("-",$day);
			$d=$day2["2"];
			$m=$day2["1"];
			$y=$day2["0"];
			$arr =array("01"=>"มกราคม",
						"02"=>"กุมภาพันธ์",
						"03"=>"มีนาคม",
						"04"=>"เมษายน",
						"05"=>"พฤษภาคม",
						"06"=>"มิถุนายน",
						"07"=>"กรกฎาคม",
						"08"=>"สิงหาคม",
						"09"=>"กันยายน",
						"10"=>"ตุลาคม",
						"11"=>"พฤศจิยายน",
						"12"=>"ธันวาคม");
						
			$arr1=array("01"=>"1",
						"02"=>"2",
						"03"=>"3",
						"04"=>"4",
						"05"=>"5",
						"06"=>"6",
						"07"=>"7",
						"08"=>"8",
						"09"=>"9",
						"10"=>"10",
						"11"=>"11",
						"12"=>"12",
						"13"=>"13",
						"14"=>"14",
						"15"=>"15",
						"16"=>"16",
						"17"=>"17",
						"18"=>"18",
						"19"=>"19",
						"20"=>"20",
						"21"=>"21",
						"22"=>"22",
						"23"=>"23",
						"24"=>"24",
						"25"=>"25",
						"26"=>"26",
						"27"=>"27",
						"28"=>"28",
						"29"=>"29",
						"30"=>"30",
						"31"=>"31");
			
			$new_day=$arr1[$d]." ".$arr[$m]." ".$y;
			return $new_day;
		}
		
		/*--------------------------------------------*/
		
		function thai_date2($day_){
			$dayz=explode("-",$day_);
			$d1=$dayz["2"];
			$m1=$dayz["1"];
			$y1=$dayz["0"];
			$arr_1 =array("01"=>"มกราคม",
						"02"=>"กุมภาพันธ์",
						"03"=>"มีนาคม",
						"04"=>"เมษายน",
						"05"=>"พฤษภาคม",
						"06"=>"มิถุนายน",
						"07"=>"กรกฎาคม",
						"08"=>"สิงหาคม",
						"09"=>"กันยายน",
						"10"=>"ตุลาคม",
						"11"=>"พฤศจิยายน",
						"12"=>"ธันวาคม");
						
			$arr_2=array("01"=>"1",
						"02"=>"2",
						"03"=>"3",
						"04"=>"4",
						"05"=>"5",
						"06"=>"6",
						"07"=>"7",
						"08"=>"8",
						"09"=>"9",
						"10"=>"10",
						"11"=>"11",
						"12"=>"12",
						"13"=>"13",
						"14"=>"14",
						"15"=>"15",
						"16"=>"16",
						"17"=>"17",
						"18"=>"18",
						"19"=>"19",
						"20"=>"20",
						"21"=>"21",
						"22"=>"22",
						"23"=>"23",
						"24"=>"24",
						"25"=>"25",
						"26"=>"26",
						"27"=>"27",
						"28"=>"28",
						"29"=>"29",
						"30"=>"30",
						"31"=>"31");
			
			$new_day1=$arr_2[$d1]." ".$arr_1[$m1]." ".($y1+543);
			return $new_day1;
		}
		?>
<? include("inc/connect.php");
//$date=thai_date($id);
$date="$day";
$month="$month";
$year1="$year";
$detail="$detail";
$Ythai=$year1-543;
//$date1=$date."-".$month."-".$year1;
$date2=$year1."-".$month."-".$date;
$date3=$Ythai."-".$month."-".$date;
$ID="$ID";
$PD="$PD";
///*************
$sql2="select * from book,puser where book.user_name=puser.user_name  and  ID='$ID'";
$result2=mysql_query($sql2);
$rows2=mysql_num_rows($result2);
$s = 0;
while($object2=mysql_fetch_array($result2)){
$status[$s] = $object2['period'];
$s++;
}
/*echo $AM=$status[0]."<br>";
echo $PM=$status[1];*/

/////*********
$sql="select * from book,puser where book.user_name=puser.user_name  and  ID='$ID'";
$result=mysql_query($sql);
$object=mysql_fetch_array($result);
$rows=mysql_num_rows($result);
if($rows!=0){
$subject2=$object['detail'];
$user2=$object['By_user'];
$Udetail=$object['user_detail'];   
$date_book =$object['date_book'];
$PD=$object['period'];
$current=$object['DOB'];
$num1=$object['num'];
$T=$object['type'];
$TO=$object['t_other'];
$sound1=$object['sound'];
$projector1=$object['projector'];
$pen1=$object['pen'];
$computer1=$object['computer'];
$other1=$object['other'];
$MO=$object['m_other'];
$ID2=$object['ID '];
}
?>
<? $arr_period=array("  08.30   ถึง  12.00 น.","  13.00  ถึง   16.30 น.","  8.30  ถึง  16.30 น.")?>
<html>
<head>
<title><?=$MSG;?></title>
<SCRIPT LANGUAGE="JavaScript">
function show(obj) 
{
if(obj.checked==true)
{ 
document.all.m_other.style.display="";
}
else
{ 
document.all.m_other.style.display="none";
document.all.m_other.value="";
}
}
//-------------------------------------------------------------------------------------//

function show2(obj) 
{
if(obj.checked==true)
{ 
document.all.t_other.style.display="none";
document.all.t_other.value="";
}
else
{ 
document.all.t_other.style.display="";
//document.all.t_other.value="";
}
}

///---------------------------------------------------------------//
function check_number(){
	if((event.keyCode<48) || (event.keyCode>57)){event.returnValue = false;alert(' กรอกเฉพาะตัวเลขเท่านั้น '); } //alert('??????????????????????? '); 
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body onLoad="window.print();">
<?
$ARR_PD=array("ช่วงเช้า","ช่วงบ่าย","ทั้งวัน");
$ARR_TYPE=array("แบบตัว U ","แบบแถวตอน ","แบบใช้เฉพาะเก้าอี้ แบบตัว U","ไม่ใช้ทั้งเก้าอี้และโต๊ะ ","อื่นๆ",);
	if($Submit=="บันทึก"){
		if ($subject == "" or $user == "" ) { 
				echo "<br><center><h2>ท่านกรอกข้อมูลไม่ครบ กรุณากรอกใหม่"; 
				echo " [<a href='javascript:history.go(-1)' onMouseOver='self.status=document.referrer;return true'>BACK</a>]</h2></center>"; 
exit; 
}
	else{       // end if check value	
						$rsuser="select * from book where period='$period' and date_book ='$date2'";
						$qyuser=mysql_query($rsuser);
						$numrowuser=mysql_num_rows($qyuser);
								if(($numrowuser>0)or($rows2=='1')and($period=='2')){
								echo "<br><center>มีการเลือก".$ARR_PD[$period]."นี้แล้ว กรุณาเลือกช่วงเวลาอื่น"; 
								echo " [ <a href='javascript:history.go(-1)' onMouseOver='self.status=document.referrer;return true'>BACK</a> ]</center>"; 
								exit;
								}
	$sql="INSERT INTO book (ID,date_book,detail,period,By_user,user_name,num,type,t_other,sound,projector,pen,computer,other,m_other) VALUES('', '$date2', '$subject', '$period', '$user','$user3','$num','$type','$t_other','$sound','$projector','$pen','$computer','$other','$m_other')";
		mysql_query($sql);
		//echo $run;
		//echo "<br><center><h2>ตั้งกระทู้เรียบร้อยแล้ว...</h2></center>";
		
		//echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=index.php\">";
		//exit;
		echo "<script>window.opener.location.reload();setTimeout(self.close());</script>";
		}
}

//--------------------------------------------------------------------------------------------------------------------
	if($Submit=="ปรับปรุง"){
		if ($subject == "" or $user == "" ) { 
				echo "<br><center><h2>ท่านกรอกข้อมูลไม่ครบ กรุณากรอกใหม่"; 
				echo " [<a href='javascript:history.go(-1)' onMouseOver='self.status=document.referrer;return true'>BACK</a>]</h2></center>"; 
exit; 
}
	else{       // end if check value	
						/*$rsuser="select * from book where date_book ='$date2' and period='$period'";
						$qyuser=mysql_query($rsuser);
						echo $numrowuser=mysql_num_rows($qyuser);
						$mm= mysql_fetch_row($qyuser);
						$X = $mm[3];
						echo $period;*/
			if(($rows2=='1')and($status[0]!='2'or $status[1]!='2')){
			$sql2="UPDATE book SET date_book='$date2',detail='$subject', period='$period',By_user='$user',type='$type',t_other ='$t_other ',sound ='$sound',projector='$projector',pen='$pen',computer='$computer',other='$other',m_other ='$m_other ' WHERE ID='$ID'";
			/*
			$sql="INSERT INTO book (ID,date_book,detail,period,By_user,user_name,num,type,t_other,sound,projector,pen,computer,other,m_other) VALUES('', '$date2', '$subject', '$period', '$user','$user3','$num','$type','$t_other','$sound','$projector','$pen','$computer','$other','$m_other')";
			*/
			mysql_query($sql2);
			echo "<script>window.opener.location.reload();setTimeout(self.close());</script>";
			}
			elseif($rows2=='2'){
			if($period!=$PD){
			echo "<br><center>มีการเลือก".$ARR_PD[$period]."นี้แล้ว กรุณาเลือกช่วงเวลาอื่น"; 
			echo " [ <a href='javascript:history.go(-1)' onMouseOver='self.status=document.referrer;return true'>BACK</a> ]</center>"; 
								exit;
			}else{
			echo $sql2="UPDATE book SET date_book='$date2',detail='$subject', period='$period',By_user='$user',type='$type',t_other ='$t_other ',sound ='$sound',projector='$projector',pen='$pen',computer='$computer',other='$other',m_other ='$m_other ' WHERE ID='$ID'";
			mysql_query($sql2);
			echo "<script>window.opener.location.reload();setTimeout(self.close());</script>";
			}
			}
	
		}
}

if($del){
$sqlDel = "DELETE   FROM   book	WHERE  ID='$EID' ";
//$rs = mysql_query($sqlDel);
if(mysql_query($sqlDel)){
	$msg = "ระบบได้ทำการลบข้อมูลเรียบร้อยแล้ว";
	echo "<script>window.opener.location.reload();setTimeout(self.close());</script>";
}else{
	$msg = "ระบบไม่สามารถทำการลบข้อมูลนี้ได้";
	echo "<meta http-equiv=\"refresh\" content=\"2;url=popUploadImages.php\">";
}
}
?>
<form name="uploadImage" action="" method="post">
  <table width="536" border="0" align="center" cellpadding="0" cellspacing="2" >
    
    <tr height="35">
      <td colspan="2" align="center"><table width="210" height="50" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td bgcolor="#CCCCCC"><div align="center"><strong>แบบฟอร์มการใช้ห้องประชุม</strong></div></td>
          </tr>
        </table>      </td>
    </tr>
    <tr height="35">
      <td colspan="2" align="center">&nbsp;</td>
    </tr>
    <tr height="35">
      <td colspan="2" align="center"><div align="left"><strong>ฝ่าย:</strong>
        <?=$Udetail;?>
      </div>        <div align="left"></div></td>
    </tr>
    <tr height="35">
      <td colspan="2" align="center"><div align="left"><strong>การประชุมเรื่อง</strong><? echo $pp;?><strong>:</strong> <? echo $subject2;?>
          <input name="EID" type="hidden" id="EID" value="<?=$ID;?>">
      </div>        <div align="left"></div></td>
    </tr>
    <tr height="35">
      <td colspan="2" align="center"><div align="left"><strong>วันที่ประชุม:</strong>
          <?=thai_date($date_book);?>
          <?=$detail;?>
          <input name="user3" type="hidden" id="user3" value="<?=$_SESSION['Usernamep']?>">
      </div></td>
    </tr>
    <tr height="35">
      <td colspan="2" align="center"><div align="left"><strong>ตั้งแต่เวลา: </strong><? echo $arr_period[$PD];?></div>        <div align="left"></div></td>
    </tr>
    <tr height="35">
      <td colspan="2" align="center"><div align="left"><strong>ชื่อผู้จอง:</strong>
        <?  echo $user2;?>
      </div>        <div align="left"></div></td>
    </tr>
    
    <tr height="35">
      <td colspan="2" align="center"><div align="left"><strong>จำนวนผู้เข้าร่วมประชุม:</strong>
          <?=$num1;?>&nbsp;คน </div>        <div align="left"></div></td>
    </tr>
    <tr height="35">
      <td colspan="2" align="center"><div align="left"><strong>วันที่แจ้งเพื่อใช้ห้องประชุม:</strong> <strong>วันท</strong>ี่ <?=thai_date2($current);?></div>        <div align="left"></div></td>
    </tr>
    <tr height="35">
      <td colspan="2" align="right" valign="top"><hr align="left"></td>
    </tr>
    <tr height="35">
      <td width="212" align="right" valign="top"><div align="left"><strong>1. รูปแบบการจัดห้องประชุม:</strong></div></td>
      <td width="318" align="left" valign="top"><div align="left">
        <p>
          <label>
          <input type="radio" name="type" value="U"<?php if($T=="U"){echo "checked";}?> onClick="show2(this)">
            แบบตัว U</label>
          <br>
          <label>
            <input type="radio" name="type" value="T"<?php if($T=="T"){echo "checked";}?> onClick="show2(this)">
            แบบแถวตอน</label>
          <br>
          <label>
            <input type="radio" name="type" value="C"<?php if($T=="C"){echo "checked";}?> onClick="show2(this)">
            แบบใช้เฉพาะเก้าอี้ แบบตัว U</label>
          <br>
          <label>
            <input type="radio" name="type" value="N"<?php if($T=="N"){echo "checked";}?> onClick="show2(this)">
            ไม่ใช้ทั้งเก้าอี้และโต๊ะ</label>
          <br>
          <label>
            <input type="radio" name="type" value="O"<?php if($T=="O"){echo "checked";}?> onClick="javaScript:if(this.checked){document.all.t_other.style.display='';}">
            อื่น</label>
          <input name="t_other" type="text" id="t_other" value="<?=$TO;?>"style="display:<? if($TO!=''){echo "";}else{ echo "none";}?>">
          <br>
        </p>
      </div></td>
    </tr>
    <tr height="35">
      <td colspan="2" align="center"><hr align="left"></td>
    </tr>
    <tr height="35">
      <td align="right" valign="top"><div align="left"><strong>2. อุปกรณ์ที่ใช้ในการประชุม:</strong></div></td>
      <td align="left" valign="top"><p align="left">
        <label>
        <input name="sound" type="checkbox" id="sound" value="1"<?php if($sound1=="1"){echo "checked";}?>>
        เครื่องเสียง</label>
        <br>
        <label></label><label>
<input name="projector" type="checkbox" id="projector" value="1"<?php if($projector1=="1"){echo "checked";}?>>        
เครื่องฉายสไลด์</label>
        <br>
        <label></label><label>
        <input name="pen" type="checkbox" id="pen" value="1"<?php if($pen1=="1"){echo "checked";}?>>
        ปากกาไวท์บอร์ด</label>
        <br>
        <label></label><label>
        <input name="computer" type="checkbox" id="computer" value="1"<?php if($computer1=="1"){echo "checked";}?>>
        ฉาย Power Point, คอมพิวเตอร์</label>
        <br>
        <label>
        <input name="other" type="checkbox" id="other" value="1"<?php if($other1=="1"){echo "checked";} ?> onClick="show(this)" > อื่น ๆ</label>
        <input name="m_other" type="text" id="m_other" value="<?=$MO;?>" style="display:<? if($MO!=''){echo "";}else{ echo "none";}?>">
        <br>
      </p></td>
    </tr>
    <tr height="35">
      <td colspan="2" align="center">&nbsp;</td>
    </tr>
    <tr height="35">
      <td colspan="2" align="center"><div align="center">
        <table width="420" border="0" align="right">
          <tr>
            <td colspan="2"><div align="left">ลงชื่อ.........................................</div></td>
            <td>ผู้ขอใช้ห้องประชุม</td>
          </tr>
          <tr>
            <td width="45">&nbsp;</td>
            <td width="197"><div align="center">(
              <?=$user2;?>
              )</div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="left">ตำแหน่ง....................................</div></td>
            <td width="164">&nbsp;</td>
          </tr>
        </table>
      </div></td>
    </tr>
    <tr height="35">
      <td colspan="2" align="center">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>