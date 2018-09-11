<?php
header ( "Content-type: text/html; charset=gb2312" );
include("conn/conn.php");
while(list($name,$value)=each($_POST)){
 mysqli_query($conn,"delete from tb_type where id='".$value."'");
 mysqli_query($conn,"delete from tb_shangpin where typeid='".$value."'");
 }
 header("location:showleibie.php");
?>