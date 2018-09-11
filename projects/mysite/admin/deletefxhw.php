<?php
header ( "Content-type: text/html; charset=gb2312" ); 
 include("conn/conn.php");
 while(list($name,$value)=each($_POST))
  {
      $sql=mysqli_query($conn,"select tupian from tb_shangpin where id='".$value."'");
	  $info=mysqli_fetch_array($sql);
	  if($info['tupian']!="")
	  {
	     @unlink(substr($info['tupian'],6,(strlen($info['tupian'])-6)));
		
	  }
	  $sql1=mysqli_query($conn,"select * from tb_orderinfo ");
	  while($info1=mysqli_fetch_array($sql1)){
	        if($info1['goodsID']==$value){
				$row = array();
				$orderID = $info1['orderID'];
			   mysqli_query($conn,"delete from tb_orderinfo where id='".$info1['id']."'");
			   $sql2=mysqli_query($conn,"select orderID from tb_orderinfo");
			   while($info2=mysqli_fetch_array($sql2)){
			   	$row[] = $info2['orderID'];
			   }
			   if(!in_array($orderID,$row)){
			   	mysqli_query($conn,"delete from tb_order where id='".$orderID."'");
			   }
			 }
	  }
      mysqli_query($conn,"delete from tb_shangpin where id='".$value."'");
	  mysqli_query($conn,"delete from tb_pingjia where goodsID='".$value."'");
  }
 header("location:editgoods.php");
?>