<?php
header ( "Content-type: text/html; charset=gb2312" ); 
$leibie=$_POST['leibie'];
include("conn/conn.php");
$sql=mysqli_query($conn,"select * from tb_type where typename='".$leibie."'");
$info=mysqli_fetch_array($sql);
if($info!=false){
 echo"<script>alert('This category already exists!');window.location.href='addleibie.php';</script>";
exit;
}
mysqli_query($conn,"insert into tb_type(typename) values ('$leibie')");
echo"<script>alert('New category added successfully!');window.location.href='addleibie.php';</script>";
?>