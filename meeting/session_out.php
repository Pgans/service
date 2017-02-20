<?
session_start();
if(!isset($_SESSION['user']))
	header("Location:index.php?show=admin");

session_unregister('user');

?>
<script>
window.location='index.php?show=admin';
</script>
<? // include"index.php"; ?>
<html>
<head>
<title>session_logout</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>

<body>

</body>
</html>
