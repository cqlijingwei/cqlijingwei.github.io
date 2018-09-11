
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Edit product</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php
  include("conn/conn.php");
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<?php
	   $sql=mysqli_query($conn,"select count(*) as total from tb_shangpin ");
	   $info=mysqli_fetch_array($sql);
	   $total=$info['total'];
	   if($total==0){
	     echo "There are no products on this site.!";
	   }
	   else
	    {
?>
<form name="form1" method="post" action="deletefxhw.php">
  <p>&nbsp;</p>
  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="75" bgcolor="#666666"><table width="750" height="86" border="0" cellpadding="0" cellspacing="1">
      
	  <tr bgcolor="#FFCF60">
        <td height="20" colspan="10"><div align="center" class="style1">Product information editing</div></td>
      </tr>
      <tr>
        <td width="59" height="28" bgcolor="#FFFFFF"><div align="center">Check</div></td>
        <td width="102" bgcolor="#FFFFFF"><div align="center">name</div></td>
        <td width="86" bgcolor="#FFFFFF"><div align="center">Brand</div></td>
        <td width="71" bgcolor="#FFFFFF"><div align="center">model</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">Remaining</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">Market price</div></td>
        <td width="61" bgcolor="#FFFFFF"><div align="center">member price</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">Sell</div></td>
        <td width="112" bgcolor="#FFFFFF"><div align="center">Join time</div></td>
        <td width="68" bgcolor="#FFFFFF"><div align="center">operating</div></td>
      </tr>
	  <?php
	  
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
			 
           $sql1=mysqli_query($conn,"select * from tb_shangpin order by addtime desc limit ".($page-1)*$pagesize.",$pagesize");
		   while($info1=mysqli_fetch_array($sql1))
		    {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="<?php echo $info1['id'];?>" value=<?php echo $info1['id'];?>>
        </div></td>
        <td height="25" bgcolor="#FFFFFF">
          
          <div align="center"><?php echo $info1['mingcheng'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['pinpai'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['xinghao'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php if($info1['shuliang']<0) {echo "Sold out";}else {echo $info1['shuliang'];}?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['shichangjia'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['huiyuanjia'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['cishu'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['addtime'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="changegoods.php?id=<?php echo $info1['id'];?>">Change</a></div></td>
      </tr>
	 <?php
	    }
        
      ?>
	 
    </table></td>
  </tr>
</table>
<table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="165">
	  <div align="left"><input name="submit" type="submit" class="buttoncss" id="submit" value="Delete selection">
	  &nbsp;<input type="reset" value="Reselect" class="buttoncss"></div></td>
    <td width="585"><div align="right">&nbsp;This site has a total of goods
        <?php
		   echo $total;
		  ?>
        &nbsp;Piece&nbsp;Every page shows&nbsp;<?php echo $pagesize;?>&nbsp;Piece&nbsp;First&nbsp;<?php echo $page;?>&nbsp;page/Total&nbsp;<?php echo $pagecount; ?>&nbsp;page
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="editgoods.php?page=1" title="Home"><font face="webdings"> 9 </font></a> <a href="editgoods.php?page=<?php echo $page-1;?>" title="previous page"><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="editgoods.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="editgoods.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="editgoods.php?page=<?php echo $page-1;?>" title="next page"><font face="webdings"> 8 </font></a> <a href="editgoods.php?page=<?php echo $pagecount;?>" title="last page"><font face="webdings"> : </font></a>
        <?php }?>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
  <?php
	}
  ?>
</body>
</html>
