<?
//session_start();
if(!isset($_SESSION['Usernamep'])){echo $_SESSION['Usernamep'];}
//header("Location:index.php?show=admin");
include("inc/connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$MSG;?></title>
<meta name="keywords" content="Business Website, free templates, website templates, 3-column layout, CSS, XHTML" />
<meta name="description" content="Business Website, 3-column layout, free CSS template from templatemo.com" />
<link href="style/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<? //include("../inc/connect.php");?>
<body>

<div id="templatemo_container">
   
    <div id="templatemo_header">
    	<div id="logosection">
	        <div class="sitelogo"></div>
        	<div class="sitename">CRRS.</div>
      </div>
        <div id="header">
    <div class="title"><span class="bigtext"><strong>Conference Room   Reservation System</strong></span><br />
	        	ระบบจองห้องประชุม โรงพยาบาลม่วงสามสิบ</div>

        </div>
	</div>
	<div id="templatemo_menu">
    	<div id="search"></div>
        <div id="menu">
            <ul>
                <li><a href="index.php?c=" <? if($c==0){?>class="current"<? }?>>หน้าแรก</a></li>
                <li><a href="main.php?c=1" <? if($c==1){?>class="current"<? }?>>รายงาน</a></li>
				<li><a href="http://www.pbhc.moph.go.th/job/manual.pdf">คู่มือการใช้งาน</a></li>
				<? if(!isset($_SESSION['Usernamep'])){?>
				<li><a href="login/index.php">เข้าสู่ระบบ</a> </li><? } else{?><li><a href="login/logout.php">ออกจากระบบ</a> </li><? }?>
				<? if(isset($_SESSION['Usernamep'])){?><li><a>สวัสดีครับ: [<? echo $_SESSION['Usernamep'];?>]</a></li><? }?>
            </ul>
      </div>
	</div>
    
    <!-- start of content -->
    <!-- end of content -->

</div>
</body>
</html>