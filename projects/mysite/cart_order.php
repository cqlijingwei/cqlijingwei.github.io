<?php
	session_start();
	include("conn/conn.php");
	if($_SESSION['producelist'] == "" || $_SESSION['quatity'] == ""){
		echo "<script>alert('You have not shopping
!');window.location.href='index.php';</script>";
	}
	if (isset($_SESSION['username'])){
			$receiveName = $_POST['receiveName'];
			$address = $_POST['address'];
			$tel = $_POST['tel'];
			$bz = $_POST['bz'];
			$array=explode("@",$_SESSION['producelist']);
			$arrayquatity=explode("@",$_SESSION['quatity']);
			$bnumber = count($array)-1;
			$flag = true;
	
			$sql = mysqli_query($conn,"insert into tb_order(bnumber,username,receiveName,address,tel,bz,orderDate) values(".$bnumber.",'".$_SESSION['username']."','".$receiveName."','".$address."','".$tel."','".$bz."','".date("Y-m-d H:i")."')");
			$insert_id = mysqli_insert_id($conn);
			if ($insert_id == 0){
				$flag = false;
			}else{
				$orderID = $insert_id;
			}
	
			$orderStatus = "Did not make any processing
";
			for($i=0;$i<count($array)-1;$i++){
				$id = $array[$i];
				$num = $arrayquatity[$i];
				$sql = mysqli_query($conn,"select * from tb_shangpin where id=".$id);
				$info = mysqli_fetch_array($sql);
				$price = $info['huiyuanjia'];
				$sql = mysqli_query($conn,"insert into tb_orderInfo (orderID,goodsID,price,number,orderStatus) values(".$orderID.",".$id.",'".$price."',".$num.",'".$orderStatus."')");
				$insert_id = mysqli_insert_id($conn);
				if ($insert_id == 0){
		 			$flag = false;
				}
			}
	
			if($flag == false){
				echo "<script>alert('The order is invalid');history.back();</script>";
			}else{
				$_SESSION['producelist']="";
				$_SESSION['quatity']="";
				echo "<script>alert('Order form, please remember your order number[".$orderID."]');window.location.href='index.php';</script>";
			}
			mysqli_close($conn);
	}else{
		echo "<script>alert('Please login first, and then to shopping
!');window.location.href='index.php';</script>";
	}
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">