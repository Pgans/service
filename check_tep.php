<?
session_start();
	
	$pwd=$_REQUEST['pwd'];
	$uname=$_REQUEST['uname'];

echo 'user';
echo $uname;
echo '<br/>';
echo $pwd;
//exit;

if (isset($uname) and isset($pwd))
include 'config.php';
	mysql_connect($host,$username,$password) or die ("�Դ��͡Ѻ�ҹ�����������");
	mysql_select_db($dbname) or die("���͡�ҹ�����������"); 
	mysql_query('set character set tis620');


{

$sql="select * from jobcom_login where uname='$uname' and pwd='$pwd'"; #��Ǩ�ͺ��� �ç������
//$sql = " select * from member where username='$name' and  password='$pass' ";
					$result = mysql_query($sql);
					$res=mysql_fetch_array($result);
					$num=mysql_num_rows($result);		

	//$fn=mysql_query($sql); #�����żŤ�ҹ���͡��
	//$res=mysql_fetch_array($fn); #���ǹѺ�ӹǹ������դ�ҷ��ç�����
	//$num = mysql_num_rows($fn);

	if($num!=0){ #��Ǩ�ͺ��� $row �ç�Ѻ 0 ������� ������ç�Ѻ 0 ��������ʷ���͡��� DB  
	
$valid_user=$uname;

session_register("user");            


            

echo"Welcome Admin <br>";
echo '<a href="admin.php"target="_top">������</a> <a href="index.php"target="_top">˹����ѡ</a>';

}

else{

echo"Invalid Username or Password <br>";
echo'  <a href="index.php?show=admin">��͡�Թ</a> ';
echo $num;
}
}
?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620">
</head>