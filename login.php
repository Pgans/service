<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>login เข้าระบบ</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
pos = 15;
TO = null;
function shake_funct2(object,speed)
{ 
  obj = eval(object)
  txt = clear_space(obj.value);
  if (pos == 15)
  {
   txt = txt + "   ";
   pos = -15;
  }
  else
  {
   txt = "   " + txt;
   pos = 15;
  }  
  obj.value = txt;
  obj.style.width = parseInt(obj.style.width) + pos;
  obj = object
  sp = speed
  TO = setTimeout("shake_funct2(obj,sp)",speed);
}

function clear_space(text)
{
 while (text.substring(0,1) == " ")
 {
  text = text.substring(1,text.length);
 }
 while(text.substring(text.length-1,text.length) == " ")
 {
  text = text.substring(0,text.length-1);
 }
 return text;
}

function end_shake_funct2(object)
{
  clearTimeout(TO);
  obj = eval(object);
  txt = clear_space(obj.value);
  obj.value = txt;
  //alert(pos);
  if (pos == -15)
  {
   obj.style.width = parseInt(obj.style.width) +15;
  }
  pos = 15
}
//  End -->
</script>
<style type="text/css">
<!--
body {  margin: 0px  0px; padding: 0px  0px}
a:link { color: #000099; text-decoration: none}
a:visited { color: #000099; text-decoration: none}
a:active { color: #000099; text-decoration: underline}
a:hover { color: #FF0000; text-decoration: underline}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>

<body>
<div align="center">
<center>
    <p><br>
    </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="349" height="187" border="0" cellpadding="0" cellspacing="0"  bordercolor="#ffffff" background="login.jpg" style="border-collapse: collapse">
      <tr> 
        <td width="100%" height="187" colspan="3"> <form action="check.php" method="post" name="form1" target="_top">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="0%">&nbsp;</td>
                <td width="29%">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td width="3%">&nbsp;</td>
                <td width="3%">&nbsp;</td>
                <td width="2%">&nbsp;</td>
                <td width="11%">&nbsp;</td>
              </tr>
              <tr> 
                <td rowspan="3">&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2" rowspan="3"><div align="center"><font color="#0033CC" size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>Login 
                    <br>
                    ระบบแบบประเมินความพึงพอใจ<br>
                    ในการทำงาน รพช.ม่วงสามสิบ</strong></font></div></td>
                <td rowspan="3">&nbsp;</td>
                <td rowspan="3">&nbsp;</td>
                <td rowspan="3">&nbsp;</td>
                <td rowspan="3">&nbsp;</td>
              </tr>
              <tr> 
                <td>&nbsp;</td>
              </tr>
              <tr> 
                <td width="29%">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td width="0%">&nbsp;</td>
                <td width="0%">&nbsp;</td>
                <td width="0%">&nbsp;</td>
                <td width="1%">&nbsp;</td>
              </tr>
              <tr> 
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="6"> <div align="left">
                    <input name="pwd" type="password" id="pwd" size="40">
                  </div></td>
              </tr>
              <tr> 
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td width="0%">&nbsp;</td>
                <td width="51%">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr> 
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td> <input name=Submit  type=image value=PostMessage  src="oklogin.jpg" alt="login" width="82" height="31" border=0 > 
                </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </form></td>
        
    </table>

    </center>
</div>	
</body>
</html>
