
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>User Management</title>
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
       $sql=mysqli_query($conn,"select count(*) as total from tb_user ");
	   $info=mysqli_fetch_array($sql);
	   $total=$info['total'];
	   if($total==0)
	   {
	     echo "No user registration on this site!";
	   }
	   else
	   {
	      
?>


<form name="form1" method="post" action="deleteuser.php">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">User Management</div></td>
  </tr>
  <tr>
    <td  bgcolor="#666666"><table width="600" border="0" align="center" cellpadding="0" cellspacing="1">
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
			 
             $sql1=mysqli_query($conn,"select * from tb_user  order by regtime desc limit ".($page-1)*$pagesize.",$pagesize ");
            
	   
	   ?>
	   <tr>
          <td width="224" height="20" bgcolor="#FFFFFF"><div align="center">User's Nickname</div></td>
          <td width="93" bgcolor="#FFFFFF"><div align="center">user status</div></td>
          <td width="79" bgcolor="#FFFFFF"><div align="center">delete</div></td>
          <td width="75" bgcolor="#FFFFFF"><div align="center">View information</div></td>
 
        </tr>
       <?php
	      while($info1=mysqli_fetch_array($sql1))
		     {
	   ?>
	   <tr>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['name'];?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center">
		  <?php
		    if($info1['dongjie']==0)
			 {
			   echo "Not frozen";
			 }
			 else
			 {
			   echo "Has been frozen";
			 }
		  
		  
		  ?>
		
          </div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="<?php echo $info1['id'];?>" value=<?php echo $info1['id'];?>></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="lookuserinfo.php?id=<?php echo $info1['id'];?>"><img src="images/button_select.png" width="14" height="13" border="0"></a></div></td>
          
        </tr>
		<?php
	        }
		    
		?>
    </table></td>
  </tr>
</table>
<table width="600" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="508"><div align="left">
	&nbsp;This site has a registered user&nbsp;<?php
		   echo $total;
		  ?>&nbsp;Bit&nbsp;Every page shows&nbsp;<?php echo $pagesize;?>&nbsp;Bit&nbsp;First&nbsp;<?php echo $page;?>&nbsp;page/Total&nbsp;<?php echo $pagecount; ?>&nbsp;page
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="edituser.php?page=1" title="Home"><font face="webdings"> 9 </font></a> 
		<a href="edituser.php?page=<?php echo $page-1;?>" title="previous page"><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="edituser.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="edituser.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="edituser.php?page=<?php echo $page-1;?>" title="next page"><font face="webdings"> 8 </font></a> 
		<a href="edituser.php?page=<?php echo $pagecount;?>" title="last page"><font face="webdings"> : </font></a>
        <?php }?>
	
	</div></td>
    <td width="92"><div align="center"><input type="submit" value="Delete option" class="buttoncss">
    </div></td>
  </tr>

</table>

<?php
   }
?>
</form>
</body>
</html>
