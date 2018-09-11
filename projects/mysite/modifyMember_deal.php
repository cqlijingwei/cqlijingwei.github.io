<?php
	session_start();
	include("conn/conn.php");
?>
<html>
<head>
<title>The member information modify
</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>

<body>
<?php
	$id = $_POST['id'];
	$pwd = $_POST['pwd'];
	$sql = mysqli_query($conn,"select * from tb_user where id=".$id);
	$info=mysqli_fetch_array($sql);
	if ($pwd != $info['pwd1']) {
		echo "<script>alert('Original password incorrect
！');window.location.href='modifyMember.php';</script>";
		exit();
	}
	$username = $_POST['username'];
	$truename = $_POST['truename'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$newPwd = $_POST['newPwd'];
	$newPwd1 = md5($_POST['newPwd']);
	$updatesql = mysqli_query($conn,"update tb_user set name='".$username."',pwd='".$newPwd1."',email='".$email."',tel='".$tel."',regtime='".date("Y-m-d")."',truename='".$truename."',pwd1='".$newPwd."' where id=".$id);
	if ($updatesql) {
			$_SESSION['username'] = $username;
			echo "<script>alert('The member information modify success
！');window.location.href='index.php';</script>";
		} else {
			echo "<script>alert('The member information modify fail！');window.location.href='modifyMember.php';</script>";
		}
?>
</body>
</html>
