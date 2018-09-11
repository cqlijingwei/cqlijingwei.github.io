<?php
header ( "Content-type: text/html; charset=gb2312" ); 
include("conn/conn.php");
$title=$_POST['title'];
$content=$_POST['content'];
$goodsID=$_GET['id'];
date_default_timezone_set('PRC');
$time=date("Y-m-d H:i");
session_start();
$username=$_SESSION['username'];
mysqli_query($conn,"insert into tb_pingjia (username,goodsID,title,content,time) values ('$username','$goodsID','$title','$content','$time') ");
echo "<script>alert('Comments to success
!');</script>";
header("location:goodsDetail.php?id=".$goodsID."&action=showcomment");
?>