<head>
<title>ผู้ดูแลระบบ  </title>
<meta http-equiv="Content-Type" content="text/html; charse=utf-8">
<style type="text/css">
<!--
body {  margin: 0px  0px; padding: 0px  0px}
a:link { color: #005CA2; text-decoration: none}
a:visited { color: #005CA2; text-decoration: none}
a:active { color: #0099FF; text-decoration: underline}
a:hover { color: #0099FF; text-decoration: underline}
-->
</style>
</head>
<? include"config.php";?>

<div align="center"></div>
<div align="center"> 
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="0%">&nbsp;</td>
      <td width="98%">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;&nbsp;</td>
      <form name="form1" method="post" action="check.php">
        <td> 
		
		<? if(!isset($_SESSION['user'])){?><table width="30%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr> 
              <td height="30" background="imag/mainstrip_first.gif"> <p align="right">&nbsp;&nbsp;</p></td>
              <td background="imag/mainstrip.gif"><div align="center">&nbsp;&nbsp; 
                  <strong><font size="3" face="MS Sans Serif, Tahoma, sans-serif">ชื่อผู้ใช้</font></strong></div></td>
              <td width="53%" background="imag/mainstrip.gif"> 
                <input name="uname" type="text" id="uname">
                </td>
              <td width="2%" background="imag/mainstrip_last.gif"><a href="check.php">&nbsp;&nbsp;</a></td>
            </tr>
            <tr> 
              <td width="2%" height="31" background="imag/mainstrip_first.gif"><div align="right"></div></td>
              <td width="43%" background="imag/mainstrip.gif"><div align="center">&nbsp;&nbsp; 
                  <strong><font size="3" face="MS Sans Serif, Tahoma, sans-serif">รหัสผ่าน</font></strong></div></td>
              <td width="53%" background="imag/mainstrip.gif">
                <input name="pwd" type="password" id="pwd">
                </td>
              <td width="2%" background="imag/mainstrip_last.gif">&nbsp;</td>
            </tr>
            <tr>
              <td height="31" background="imag/mainstrip_first.gif">&nbsp;</td>
              <td background="imag/mainstrip.gif">&nbsp;</td>
              <td background="imag/mainstrip.gif"><input type="submit" name="Submit" value="ตกลง">
                <input type="button" name="Submit2" value="ยกเลิก" onClick="javascript : var targeturl='index.php?show=main';	window.location=targeturl ;"></td>
              <td background="imag/mainstrip_last.gif">&nbsp;</td>
            </tr>
          </table>
		  <? } else{
		  $user=$_SESSION['user'];
		  $sql="select * from jobcom_login where pwd='$user'";
		  $result=mysql_query($sql);
		  $row=mysql_fetch_object($result);
		  ?>
          <font size="2" face="MS Sans Serif, Tahoma, sans-serif"> <? //echo $user,"<br>";
		  echo $row->fullname,"<br>";
		  //echo $row->plan,"<br>";
		  ?> <a href="session_out.php">logout</a> </font> 
          <? }?>
        </td>
      </form>
      <td>&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><div align="center"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>ศูนย์คอมพิวเตอร์ 
          โรงพยาบาลสมเด็จพระยุพราชด่านซ้าย<br>
          โทร. 042-891276 ต่อ 444 Email : dansai02@hotmail.com</strong></font></div></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp; </p>
</div>
