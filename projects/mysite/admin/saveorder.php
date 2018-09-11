<?php  
header ( "Content-type: text/html; charset=gb2312" ); 
$ysk=isset($_POST['ysk'])?$_POST['ysk']:"";
$yfh=isset($_POST['yfh'])?$_POST['yfh']:"";
$ysh=isset($_POST['ysh'])?$_POST['ysh']:"";
$orderStatus="";
if($ysk!=""){
   $orderStatus.=$ysk."&nbsp;";
 }
if($yfh!=""){
   $orderStatus.=$yfh."&nbsp;";
 }
 if($ysh!=""){
   $orderStatus.=$ysh."&nbsp;";
 }
 if($ysk=="" && $yfh=="" && $ysh==""){
    echo "<script>alert('Please select the processing status!');history.back();</script>";
	exit;
  }
 include("conn/conn.php");
 $sql=mysqli_query($conn,"select * from tb_orderinfo where id='".$_GET['id']."'");
 $info=mysqli_fetch_array($sql);
 if($info['orderStatus'] == "No processing"){
 	$num = $info['number'];
	$goodsID = $info['goodsID'];
     mysqli_query($conn,"update tb_shangpin set cishu=cishu+'".$num."' ,shuliang=shuliang-'".$num."' where id='".$goodsID."'");
  }
 mysqli_query($conn,"update tb_orderinfo set orderStatus='".$orderStatus."'where id='".$_GET['id']."'");
 header("location:lookdd.php");
?>