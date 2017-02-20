<?
session_start();
foreach ( $_POST  as  $k => $v ) { ${$k} = $v; } 
foreach ( $_GET  as  $k => $v ) { ${$k} = $v; } 
if(!isset($_SESSION['Usernamep'])){echo $_SESSION['Usernamep'];}
//	header("Location:index.php?show=admin");
include("inc/connect.php");
?>

<? 
//$date=thai_date($id);
$date="$day";
$month="$month";
$year1="$year";
$detail="$detail";
$Ythai=$year1-543;
//$date1=$date."-".$month."-".$year1;
$date2=$year1."-".$month."-".$date;
$date3=$Ythai."-".$month."-".$date;
$current=date("Y-m-d");
$ID="$ID";
$PD="$PD";
///*************
$sql2="select * from book where date_book='$date2'";
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
$sql="select * from book where date_book='$date2' and ID='$ID'";
$result=mysql_query($sql);
$object=mysql_fetch_array($result);
$rows=mysql_num_rows($result);
if($rows!=0){
$subject2=$object['detail'];
$user2=$object['By_user'];
$UID=$object['user_name'];
$date_book =$object['date_book '];
$PD=$object['period'];
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
$xroom=$object['room_id'];
}
?>
<? $arr_period=array("ช่วงเช้า","ช่วงบ่าย","ทั้งวัน")?>
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

<script type="text/javascript">
function goto(run) {
//alert(run);
window.open("reportB.php?ID="+run+"","name1","top=100,left=100,height=650,width=600, status=2"); 
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?
$ARR_PD=array("  08.30   ถึง  12.00 น.","  13.00  ถึง   16.30 น.","  8.30  ถึง  16.30 น.");
$ARR_TYPE=array("แบบตัว U ","แบบแถวตอน ","แบบใช้เฉพาะเก้าอี้ แบบตัว U","ไม่ใช้ทั้งเก้าอี้และโต๊ะ ","อื่นๆ",);
	if($Submit=="บันทึก"){
		if ($subject == "" or $user == "" ) { 
				echo "<br><center><h2>ท่านกรอกข้อมูลไม่ครบ กรุณากรอกใหม่"; 
				echo " [<a href='javascript:history.go(-1)' onMouseOver='self.status=document.referrer;return true'>BACK</a>]</h2></center>"; 
exit; 
}
	else{       // end if check value	 
						$rsuser="select * from book where (period='$period' and date_book ='$date2' and room_id='$room_id')
or (date_book ='$date2' and period='2' and room_id='$room_id' )";
						$qyuser=mysql_query($rsuser);
						$numrowuser=mysql_num_rows($qyuser);
								if(($numrowuser>0)or($rows2=='1')and($period=='2')){
								echo "<br><center>มีการเลือก".$ARR_PD[$period]."นี้แล้ว กรุณาเลือกช่วงเวลาอื่น"; 
								echo " [ <a href='javascript:history.go(-1)' onMouseOver='self.status=document.referrer;return true'>BACK</a> ]</center>"; 
								exit;
								}
	$sql="INSERT INTO book (ID,date_book,detail,period,DOB,By_user,user_name,num,type,t_other,sound,projector,pen,computer,other,m_other,room_id) VALUES('', '$date2', '$subject', '$period', '$current','$user','$user3','$num','$type','$t_other','$sound','$projector','$pen','$computer','$other','$m_other','$room_id')";
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
			$sql2="UPDATE book SET date_book='$date2',detail='$subject', period='$period',DOB='$current',By_user='$user',type='$type',t_other ='$t_other ',sound ='$sound',projector='$projector',pen='$pen',computer='$computer',other='$other',m_other ='$m_other ',room_id='$room_id' WHERE ID='$ID'";
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
			echo $sql2="UPDATE book SET date_book='$date2',detail='$subject', period='$period',By_user='$user',type='$type',t_other ='$t_other ',sound ='$sound',projector='$projector',pen='$pen',computer='$computer',other='$other',m_other ='$m_other ',room_id='$room_id' WHERE ID='$ID'";
			mysql_query($sql2);
			echo "<script>window.opener.location.reload();setTimeout(self.close());</script>";
			}
			}
	
		}
}

if($del){
echo $sqlDel = "DELETE   FROM   book	WHERE  ID='$EID' ";
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
<? $Today=date("Y-m-d");
	if(($date3>=$Today)or($ID!=0)){ ?>
  <table width="564" border="0" cellspacing="2" cellpadding="0" >
  
  
      <tr height="35">
      <td align="center"><div align="right">ห้องประชุม<strong>:</strong></div></td>
      <td align="center"><div align="left">
	<? if((($UID==$_SESSION['Usernamep'])and($_SESSION['Usernamep']!=''))or($ID=='')or($_SESSION['Usernamep']=='admin')){?>
          <select name="room_id" id="room_id">
           <?
           	$sx = "select * from meeting_room";
			$qx = mysql_query($sx);
			while($r=mysql_fetch_array($qx))
			{
		   ?>
           /* <option value="<?="$r[room_id]";?>" <?php if($xroom=="$r[room_id]"){ echo "selected";}?>><?="$r[room_name]";?></option>
            <?
			} // end while */
			?>
			
			</select>
			 <? }else{
		  if($xroom=$object['room_id']=="1"){
		  echo 'ประสานใจ';
		  }elseif($xroom=$object['room_id']=="2"){
		  echo "บุญเกษม";
		  }elseif($xroom=$object['room_id']=="3"){
		  echo "เวชปฏิบัติชั้น2";
		  }elseif ($xroom=$object['room_id']=="4"){
		  echo "ผู้ป่วยในหญิง";
		  }else{
		  echo "ยังไม่มีห้องประชุม";
		  }
		 } 
		  ?>
      </div></td>
    </tr>
  
  
    <tr height="35">
      <td width="174" align="center"><div align="right">เรื่อง<? echo $pp;?><strong>:</strong></div></td>
      <td width="384" align="center"><div align="left">
          <? if((($UID==$_SESSION['Usernamep'])and($_SESSION['Usernamep']!=''))or($ID=='')or($_SESSION['Usernamep']=='admin')){?>
          
          <input name="subject" type="text" id="subject" value="<?=$subject2;?>" size="30" maxlength="30">
          <? }else{ echo $subject2;}?>
          <input name="EID" type="hidden" id="EID" value="<?=$ID;?>">
		  </div></td>
    </tr>
    <tr height="35">
      <td align="center"><div align="right">ช่วงเวลา<strong>:</strong></div></td>
      <td align="center"><div align="left">
	<? if((($UID==$_SESSION['Usernamep'])and($_SESSION['Usernamep']!=''))or($ID=='')or($_SESSION['Usernamep']=='admin')){?>
          <select name="period" id="period">
            <option value="0"<?php if($PD=="0"){ echo "selected";}?>>ช่วงเช้า</option>
            <option value="1"<?php if($PD=="1"){ echo "selected";}?>>ช่วงบ่าย</option>
            <option value="2"<?php if($PD=="2"){ echo "selected";}?>>ทั้งวัน</option>
          </select><? }else{ echo $arr_period[$PD];}?>
      </div></td>
    </tr>
    <tr height="35">
      <td align="center"><div align="right">ชื่อผู้จอง<strong>:</strong></div></td>
      <td align="center"><div align="left">
        <? if((($UID==$_SESSION['Usernamep'])and($_SESSION['Usernamep']!=''))or($ID=='')or($_SESSION['Usernamep']=='admin')){?><input name="user" type="text" id="user" value="<?=$user2;?>"><? }else{ echo $user2;}?>
      </div></td>
    </tr>
    <tr height="35">
      <td align="center"><div align="right">วันที่คุณเลือก</div></td>
      <td align="center"><div align="left">
        <?=$date2;?>
        <?=$detail;?>
        <input name="user3" type="hidden" id="user3" value="<?=$_SESSION['Usernamep']?>">
      <? //$current;?></div></td>
    </tr>
    <tr height="35">
      <td align="center"><div align="right">จำนวนผู้เข้าร่วมประชุม:</div></td>
      <td align="center"><div align="left">
	  <? if((($UID==$_SESSION['Usernamep'])and($_SESSION['Usernamep']!=''))or($ID=='')or($_SESSION['Usernamep']=='admin')){?>
        <input name="num" type="text" value="<?=$num1;?>" id="num" size="3" maxlength="3"  onKeyPress="check_number()"><? }else{ echo $num1; }?>
        คน      </div></td>
    </tr>
    <tr height="35">
      <td colspan="2" align="right" valign="top"><hr></td>
    </tr>
    <tr height="35">
      <td align="right" valign="top"><div align="right">รูปแบบการจัดห้องประชุม<strong>:</strong></div></td>
      <td align="left" valign="top"><div align="left">
        <p>
          <label><? if((($UID==$_SESSION['Usernamep'])and($_SESSION['Usernamep']!=''))or($ID=='')or($_SESSION['Usernamep']=='admin')){?>
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
		  <? }else{
		  if($T=="O"){
		  echo $TO;
		  }elseif($T=="U"){
		  echo "แบบตัว U";
		  }elseif($T=="T"){
		  echo "แบบแถวตอน";
		  }elseif($T=="C"){
		  echo "แบบใช้เฉพาะเก้าอี้ แบบตัว U";
		  }else{
		  echo "ไม่ใช้ทั้งเก้าอี้และโต๊ะ";
		  }
		 } 
		  ?>
          <br>
        </p>
      </div></td>
    </tr>
    <tr height="35">
      <td colspan="2" align="center"><hr></td>
    </tr>
    <tr height="35">
      <td align="right" valign="top"><div align="right">อุปกรณ์ที่ใช้ในการประชุม<strong>:</strong></div></td>
      <td align="left" valign="top"><p align="left">
        <label>
		<? if((($UID==$_SESSION['Usernamep'])and($_SESSION['Usernamep']!=''))or($ID=='')or($_SESSION['Usernamep']=='admin')){?>
        </label>
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
        <? }else{
		  if($sound1=="1"){echo "เครื่องเสียง"."<br>"; }
		  if($projector1=="1"){echo "เครื่องฉายสไลด์"."<br>";}
		  if($pen1=="1"){echo "ปากกาไวท์บอร์ด"."<br>";}
		  if($computer1="1"){ echo "ฉาย Power Point , คอมพิวเตอร์"."<br>"; }
		  if($other1=="1"){echo $MO."<br>"; }
		 } 
		  ?>
        <br>
      </p></td>
    </tr>
    <tr height="35">
      <td align="center">&nbsp;</td>
      <td align="center"><div align="left">
      <? if((($UID==$_SESSION['Usernamep'])and($_SESSION['Usernamep']!=''))or($ID=='')or($_SESSION['Usernamep']=='admin')){?><input type="submit" name="Submit" value="<? if($rows!=0){ echo "ปรับปรุง";}else{ echo "บันทึก";}?>"><? }?>
      <? if((($UID==$_SESSION['Usernamep'])and($_SESSION['Usernamep']!=''))and($ID!='')or($_SESSION['Usernamep']=='admin')and($rows!=0)){?><input name="del" type="submit" id="del" value=" ลบ ">
      <input type="button" name="Submit2" value="พิมพ์" onclick='goto("<? echo $ID;?>","")' >
      <? }?>
      </div></td>
    </tr>
  </table><? }else echo "กรุณาเลือกวันใหม่"; ?>
</form>
</body>
</html>