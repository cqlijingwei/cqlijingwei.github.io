<?php
header ( "Content-type: text/html; charset=gb2312" );
include("conn/conn.php");
while(list($name,$value)=each($_POST))
  {
  	$sql=mysqli_query($conn,"select * from tb_user where id=".$value);
	$info=mysqli_fetch_array($sql);
    mysqli_query($conn,"delete from tb_user where id=".$value);
	mysqli_query($conn,"delete from tb_pingjia where username='".$info['name']."'");
  }
header("location:edituser.php");
?>