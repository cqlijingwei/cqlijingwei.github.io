<?php
	$conn=mysqli_connect("localhost","root","root","db_shop") or die("数据库服务器连接错误".mysql_error());
	//mysql_select_db("db_shop",$conn) or die("数据库访问错误".mysql_error());
	mysqli_query($conn,"set character set gb2312");
	mysqli_query($conn,"set names gb2312");
?>
