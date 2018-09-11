<?php
header ( "Content-type: text/html; charset=gb2312" ); 
session_start();
include("conn/conn.php");
$username=$_POST['username'];
$pwd1=$_POST['pwd'];
$pwd=md5($_POST['pwd']);
$email=$_POST['email'];
$truename=$_POST['truename'];
$tel=$_POST['tel']; 
date_default_timezone_set('PRC');
$regtime=date("Y-m-d");
$dongjie=0;
$sql=mysqli_query($conn,"select * from tb_user where name='".$username."'");
$info=mysqli_fetch_array($sql);
if($info==true)
 {
   echo "<script>alert('The account existed!Please change account!');history.back();</script>";
   exit;
 }
 else
 {  
    mysqli_query($conn,"insert into tb_user (name,pwd,dongjie,email,truename,tel,regtime,pwd1) values ('$username','$pwd','$dongjie','$email','$truename','$tel','$regtime','$pwd1')");
    echo "<script>alert('Register successful!');window.location='index.php';</script>";
 }
?>
