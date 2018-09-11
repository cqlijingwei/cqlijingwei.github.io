<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Check order</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<?php
    include("conn/conn.php");
?>
 <?php
	   $sql=mysqli_query($conn,"select count(*) as total from tb_orderinfo ");
	   $info=mysqli_fetch_array($sql);
	   $total=$info['total'];
	   if($total==0){
	     echo "There are no orders on this site.!";
	   }
	   else{
	       $pagesize=10;
		   if ($total<=$pagesize){
		      $pagecount=1;
			} 
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;
			}else{
			   $pagecount=$total/$pagesize;
			}
			if(!isset($_GET['page'])){
			    $page=1;
			
			}else{
			    $page=intval($_GET['page']);
			}
           $sql1=mysqli_query($conn,"select t1.orderDate,t2.id,t2.orderID,t2.number,t2.orderStatus,t3.mingcheng,t3.huiyuanjia from tb_order t1,tb_orderinfo t2,tb_shangpin t3 where t1.id=t2.orderID and t2.goodsID=t3.id order by orderDate desc limit ".($page-1)*$pagesize.",$pagesize");
		   $info1=mysqli_fetch_array($sql1);
?>
<form name="form1" method="post" action="deletedd.php">   
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">Check order </div></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#666666"><table width="750" height="44" border="0" align="center" cellpadding="0" cellspacing="1">
	  <tr>
        <td width="51" height="20" bgcolor="#FFFFFF"><div align="center">Order number</div></td>
        <td width="99" bgcolor="#FFFFFF"><div align="center">Product name</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">Purchase quantity</div></td>
        <td width="70" bgcolor="#FFFFFF"><div align="center">Unit price</div></td>
        <td width="78" bgcolor="#FFFFFF"><div align="center">Amount of consumption</div></td>
        <td width="117" bgcolor="#FFFFFF"><div align="center">Order date</div></td>
        <td width="140" bgcolor="#FFFFFF"><div align="center">Order Status</div></td>
        <td width="135" bgcolor="#FFFFFF"><div align="center">Operating</div></td>
	  </tr>
	  <?php
		    do{
	  ?>
      <tr>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['orderID'];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['mingcheng'];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['number'];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['huiyuanjia'];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['number']*$info1['huiyuanjia'];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['orderDate'];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['orderStatus'];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center">
		    <input name="button" type="button" class="buttoncss" id="button" onClick="javascript:window.open('showdd.php?id=<?php echo $info1['id'];?>','newframe','width=600,height=300,left=100,top=100,menubar=no,toolbar=no,location=no,scrollbars=no')" value="View">
		    &nbsp;
		    <input name="button2" type="button" class="buttoncss" id="button2" onClick="javascript:window.location='orderdd.php?id=<?php echo $info1['id'];?>';" value="Carried out">       
            <input type="checkbox"  name=<?php echo $info1['id'];?> value=<?php echo $info1['id'];?>></div></td>
      </tr>
	  <?php
	      }while($info1=mysqli_fetch_array($sql1))
	  ?>
    </table></td>
  </tr>
</table>
<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="652"><div align="right">
	This site has a total order
	<?php
		echo $total;
	?>        
	&nbsp;Article&nbsp;Every page shows&nbsp;<?php echo $pagesize;?>&nbsp;Article&nbsp;First&nbsp;<?php echo $page;?>&nbsp;Page/Total&nbsp;<?php echo $pagecount; ?>&nbsp;Page
    <?php
		if($page>=2){	
	?>
        <a href="lookdd.php?page=1" title="Home"><font face="webdings"> 9 </font></a>
		<a href="lookdd.php?id=<?php echo $info1['id'];?>&page=<?php echo $page-1;?>" title="Previous page"><font face="webdings"> 7 </font></a>
	<?php
		}
		if($pagecount<=4){
			for($i=1;$i<=$pagecount;$i++){
	?>
        <a href="lookdd.php?page=<?php echo $i;?>"><?php echo $i;?></a>
    <?php
			}
		}else{
		   	for($i=1;$i<=4;$i++){	  
	?>
        <a href="lookdd.php?page=<?php echo $i;?>"><?php echo $i;?></a>
    <?php 
			}
			if($page<$pagecount){
	?>
        <a href="lookdd.php?page=<?php echo $page+1;?>" title="Next page"><font face="webdings"> 8 </font></a> 
		<a href="lookdd.php?id=<?php echo $info1['id'];?>&page=<?php echo $pagecount;?>" title="Last page"><font face="webdings"> : </font></a>
    <?php 
			}
		}
	?>
	</div></td>
    <td width="98"><div align="center"><input type="hidden" name="page_id" value=<?php echo $page;?>><input type="submit" value="Delete selection" class="buttoncss"></div></td>
  </tr>
</table>
<?php
 }
?>
</form>
</body>
</html>
