<? 
session_start();
//include("/inc/connect.php");
include("../inc/connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title><?=$MSG;?></title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

	<form id="login-form" action="checklogin.php" method="post">
		<fieldset>
		
			<legend>Log in</legend>
			
			<label for="login">
			<?
				$sql = "SELECT * FROM puser ORDER BY  user_id ASC";
				$rs = mysql_query($sql);
				?>
			แผนก</label>
			<select name="USN"   style="width:200px">
              <option value="00" selected="selected">---> กรุณาเลือก <--- </option>
              <? while($result = mysql_fetch_array($rs)){?>
              <option value="<? echo $result['user_name']?>"><? echo $result['user_detail']?></option>
              <? } ?>
            </select>
			<div class="clear"></div>
			<label for="password">รหัสผ่าน</label>
			<p>
			  <input name="PSW" type="password" id="PSW" style="width:200px"/>
		</p>
			<p>
			  <input type="submit" style="margin: 10px 0 0 200px;" class="button" name="commit" value="เข้าสู่ระบบ"/>
		          </p>
		</fieldset>
	</form>
	
</body>

</html>