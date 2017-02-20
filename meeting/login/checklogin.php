<?
session_start();
include("../inc/connect.php");
?>
<?
foreach ( $_POST  as  $k => $v ) { ${$k} = $v; } 
foreach ( $_GET  as  $k => $v ) { ${$k} = $v; } 
//foreach($data as $k => $_GET[$v] )
//echo "------>".$sqlc.$USN.$PSW;

				    $sqlc = "SELECT user_id,user_name ,user_psw,user_detail FROM  puser  WHERE user_name = '$USN' AND user_psw = '$PSW' ";
					$loginRS = mysql_query($sqlc);
					$rsfound = mysql_num_rows($loginRS);				
					$data = mysql_fetch_array($loginRS);
					
					$loginUserId  = $data['user_id'];
					$loginUsername  = $data['user_name'];
					$loginPassword  = $data['user_psw'];
					$loginDetail  = $data['user_detail'];
					
					
					$_SESSION['Userid'] = $loginUserId;
					$_SESSION['Usernamep'] = $loginUsername;
					$_SESSION['Passwordp'] = $loginPassword;
					$_SESSION['Detailp'] = $loginDetail;
					
					session_register("Userid");
					session_register("Usernamep");
					session_register("Passwordp");
					session_register("Detailp");
				
					if( !empty($_SESSION['Usernamep']) ){
					echo "<meta http-equiv=\"refresh\"  content=\"0;url=../index.php?show=calender\">";
					}else{ 
						//echo "------>".$sqlc.$USN.$PSW;
					?>
					
					<script language="javascript">
						alert('การเข้าสู่ระบบไม่ถูกต้อง');
					</script>
					<?
					echo "<meta http-equiv=\"refresh\"  content=\"0;url=index.php\">";
					}
?>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620" />