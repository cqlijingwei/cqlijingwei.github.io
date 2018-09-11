
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Order Tracking</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<?php
  include("conn/conn.php");
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" bgcolor="#FFCF60"><div align="center" style="color: #FFFFFF">Order Tracking</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="550" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
              <td bgcolor="#FFFFFF">
			  <table width="750" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
			   <script language="javascript">
			     function chkinput3(form)
				 {
				   if((form.username.value=="")&&(form.ddh.value==""))
				    {
				      alert("Please enter the orderer or order number");
					  form.username.select();
					  return(false);
				    }
				   return(true);
				    
				 }
			   </script>
                <form name="form3" method="post" action="finddd.php" onSubmit="return chkinput3(this)">
				<tr>
                  <td width="500" height="25"><div align="center">Orderer name:<input type="text" name="username" class="inputcss" size="25" >
                    order number:<input type="text" name="ddh" size="25" class="inputcss" ></div></td>
                  <td height="25">
                    <div align="left">
					    <input type="hidden" value="show_find" name="show_find">
                        <input name="button" type="submit" class="buttoncss" id="button" value="Search">
                    </div></td>
                </tr>
			    </form>
              </table></td>
            </tr>
          </table></td>
        </tr>
</table>
      <table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
	  <?php
	    if(isset($_POST['show_find']) && $_POST['show_find']!=""){
	      $username=trim($_POST['username']);
		  $ddh=trim($_POST['ddh']);
		  if($username==""){
		       $sql=mysqli_query($conn,"select * from tb_order t1,tb_orderinfo t2,tb_shangpin t3 where t1.id=t2.orderID and t2.goodsID=t3.id and t2.orderID='".$ddh."'");
		   }
		  elseif($ddh==""){
		      $sql=mysqli_query($conn,"select * from tb_order t1,tb_orderinfo t2,tb_shangpin t3 where t1.id=t2.orderID and t2.goodsID=t3.id and t1.username='".$username."'");
		   }
		  else{
		      $sql=mysqli_query($conn,"select * from tb_order t1,tb_orderinfo t2,tb_shangpin t3 where t1.id=t2.orderID and t2.goodsID=t3.id and t1.username='".$username."'and t2.orderID='".$ddh."'");
		  }
		  $info=mysqli_fetch_array($sql);
		  if($info==false){
		      echo "<div algin='center'>Sorry, I didn't find the order.!</div>";    
		   }
		   else{
	  ?>
	  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" bgcolor="#FFCF60"><div align="center" style="color: #FFFFFF">search result</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="750" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
              <td width="77" height="25" bgcolor="#FFFFFF"><div align="center">order number</div></td>
			  <td width="77" bgcolor="#FFFFFF"><div align="center">product name</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">Ordering person</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">Receiver</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">Shipping address</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">phone</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">Order date</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">Order Status</div></td>
            </tr>
			<?php
			  do{
			?>
            <tr>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['orderID'];?></div></td>
			  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['mingcheng'];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['username'];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['receiveName'];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['address'];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['tel'];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['orderDate'];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['orderStatus'];?></div></td>
            </tr>
			<?php
			   }while($info=mysqli_fetch_array($sql));
			?>
          </table></td>
        </tr>
      </table>
	    <?php
		   }
		  }
		?>
</body>
</html>
