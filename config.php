<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>
<style type="text/css"><!--
body {  margin: 0px  0px; padding: 0px  0px}
a:link { color: #005CA2; text-decoration: none}
a:visited { color:#005CA2 ; text-decoration: none}
a:active { color: #006699; text-decoration: none}
a:hover { font-weight:bold;color: #006699; text-decoration: underline}
--></style>
<style type="text/css">
		body {  scrollbar-base-color:#FFFFFF;
					   scrollbar-arrow-color:#FFFFFF;
					}	</style>
<style type='text/css'>
a.Button {
  border-style: solid;
  border-width: 1spx;
  border-color: #000000;
  color: #000000;
  font-family: "MS Sans Serif", Arial, Tahoma, sans-serif;
  font-size: 8pt;
  font-style: normal;
  font-weight: normal;
  padding: 5px;
  padding-left: 6px; 
  padding-right: 6px;
  position: relative;
  text-decoration: none;
}

a.Button:hover {
  border-color: #f0f0f0 #505050 #505050 #f0f0f0;
  text-decoration: none;
  border-style: solid;
  border-width: 3px;
  font-family: "MS Sans Serif", Arial, Tahoma, sans-serif;
  font-size: 8pt;
  font-style: normal;
  font-weight: normal;
  padding: 2px;
  padding-left: 6px; 
  padding-right: 6px;
  position: relative;
}
</style>
<? /*<script>
var sound=new Array("alert_newjob.mp3","alert_newjob.mp3","alert_newjob.mp3","alert_newjob.mp3")

var randomsoundenumber=Math.floor((sound.length)*Math.random())
			//	if (confirm('ต้องการฟังเพลง'+sound[randomsoundenumber]+'  หรือไม่ ?')) {
				//var targeturl='blood_del_php.php?idd=$idd&count_blood=$count_blood';
				//window.location=targeturl 
				
				
document.write("<EMBED SRC='"+sound[randomsoundenumber]+"' AUTOSTART='TRUE' LOOP='FALSE' WIDTH='0' HEIGHT='0' ALIGN='CENTER'>")
document.write("<NOEMBED>")
document.write("<BGSOUND SRC='"+sound[randomsoundenumber]+"' LOOP='1'>")
document.write("<NOEMBED>")
document.write("</EMBED>") 
//}else{
				//  history.back();
	//			}
</script>
*/?>
<?
$host = "192.168.200.4"; 
$username = "root"; 
$password = "1234"; 
$dbname = "job"; 
$adminmail ="gan_pop@hotmail.com"; 


@$db=mysql_connect("192.168.200.4","root","1234");
$charset = "SET NAMES'tis620'"; 

$cs1 = "SET character_set_results=tis620";
mysql_query($cs1) or die('Error query: ' . mysql_error()); 

$cs2 = "SET character_set_client = tis620";
mysql_query($cs2) or die('Error query: ' . mysql_error()); 

$cs3 = "SET character_set_connection = tis620";
mysql_query($cs3) or die('Error query: ' . mysql_error());
if(!$db)
{
	echo "เกิดข้อผิดพลาด";
	exit;
}
mysql_select_db("job");
$tbname="job";
$url="http://localhost";

?>