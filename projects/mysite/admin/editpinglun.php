
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Comment editor</title>
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
       $sql=mysqli_query($conn,"select count(*) as total from tb_pingjia ");
	   $info=mysqli_fetch_array($sql);
	   $total=$info['total'];
	   if($total==0)
	   {
	     echo "No comments from users on this site!";
	   }
	   else
	   {
	      
?>
<script language="javascript">
  function openpj(id)
  {
    window.open("lookpinglun.php?id="+id,"newframe","width=500,height=300,top=100,left=200,menubar=no,toolbar=no,location=no,scrollbar=no,status=no");
    
  }  
</script>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  
 <form name="form2" method="post" action="deletepingjia.php"> 
  <tr bgcolor="#FFCF60">
    <td height="20" colspan="2"><div align="center" class="style1">User comment editor</div></td>
  </tr>
  <tr>
    <td height="40" colspan="2" bgcolor="#666666"><table width="750" height="45" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="294" height="22" bgcolor="#FFFFFF"><div align="center">Comment topic</div></td>
        <td width="93" bgcolor="#FFFFFF"><div align="center">product name</div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center">Comment by</div></td>
        <td width="110" bgcolor="#FFFFFF"><div align="center">Comment time</div></td>
        <td width="87" bgcolor="#FFFFFF"><div align="center">operating</div></td>
        <td width="59" bgcolor="#FFFFFF"><div align="center">delete</div></td>
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
			 
             $sql1=mysqli_query($conn,"select * from tb_pingjia  order by time desc limit ".($page-1)*$pagesize.",$pagesize ");
             while($info1=mysqli_fetch_array($sql1))
		     {
	   
	   ?>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="left"><?php echo $info1['title'];?></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center">
		<?php
		  $sql2=mysqli_query($conn,"select * from tb_shangpin where id='".$info1['goodsID']."'");
		  $info2=mysqli_fetch_array($sql2);
		  echo $info2['mingcheng'];
		?></div></td>
        <td height="20" bgcolor="#FFFFFF">
		<div align="center">
		<?php
		  echo $info1['username'];
		?>
		</div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['time'];?></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="javascript:openpj(<?php echo $info1['id'];?>);">View</a></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><input type="checkbox" value=<?php echo $info1['id']?> name="<?php echo $info1['id'];?>"></div></td>
      </tr>
	   <?php
	        }
		    
		?>
    </table></td>
  </tr>
  <tr>
    <td width="657" height="20">
	<div align="left">
	&nbsp;This site has a total of comments&nbsp;<?php
		   echo $total;
		  ?>&nbsp;Article&nbsp;Every page shows&nbsp;<?php echo $pagesize;?>&nbsp;Artical&nbsp;First&nbsp;<?php echo $page;?>&nbsp;Page/Total&nbsp;<?php echo $pagecount; ?>&nbsp;Page
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="editpinglun.php?page=1" title="Home"><font face="webdings"> 9 </font></a> 
		<a href="editpinglun.php?page=<?php echo $page-1;?>" title="previous page"><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="editpinglun.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="editpinglun.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="editpinglun.php?page=<?php echo $page-1;?>" title="next page"><font face="webdings"> 8 </font></a> 
		<a href="editpinglun.php?page=<?php echo $pagecount;?>" title="last page"><font face="webdings"> : </font></a>
        <?php }?>
	
	
	</div></td>
    <td width="93"><div align="center"><input type="submit" value="Delete option" class="buttoncss"></div></td>
  </tr>
  </form>
</table>

<?php
  }
?>
</body>
</html>