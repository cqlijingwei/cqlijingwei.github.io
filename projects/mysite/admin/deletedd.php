<?php
	header ( "Content-type: text/html; charset=gb2312" );
  	$page=intval($_POST['page_id']);
  	include("conn/conn.php");
  	while(list($value,$name)=each($_POST)){
   		$sql = mysqli_query($conn,"select orderID from tb_orderinfo where id='".$value."'");
		$info = mysqli_fetch_array($sql);
     	mysqli_query($conn,"delete from tb_orderinfo where id='".$value."'");
	 	$row = array();
	 	$sql1 = mysqli_query($conn,"select orderID from tb_orderinfo");
		while($info1 = mysqli_fetch_array($sql1)){
			$row[]=$info1['orderID'];
		}
	 	if(!in_array($info['orderID'],$row)){
	 		mysqli_query($conn,"delete from tb_order where id='".$info['orderID']."'");
	 	}
   	}
 	header("location:lookdd.php?page=".$page."");
?>
