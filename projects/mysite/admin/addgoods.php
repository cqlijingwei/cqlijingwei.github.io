<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Adding goods</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php include("conn/conn.php");?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">Adding goods</div></td>
  </tr>
  <tr>
    <td height="253" bgcolor="#666666"><table width="720" border="0" cellpadding="0" cellspacing="1">
	<script language="javascript">
	function chkinput(form)
	{
	  if(form.mingcheng.value=="")
	   {
	     alert("Please enter the product name!");
		 form.mingcheng.select();
		 return(false);
	   }
	  
	
	
	  if(form.huiyuanjia.value=="")
	   {
	     alert("Please enter the product member price!");
		 form.huiyuanjia.select();
		 return(false);
	   }
	 
	
	
	  if(form.shichangjia.value=="")
	   {
	     alert("Please enter the market price of the commodity!");
		 form.shichangjia.select();
		 return(false);
	   }
	   if(form.huiyuanjia.value>form.shichangjia.value){
	   	alert("Member price cannot be greater than market price!");
		 form.huiyuanjia.select();
		 return(false);
	   }
	   
	  if(form.dengji.value=="")
	   {
	     alert("Please enter the product grade!");
		 form.dengji.select();
		 return(false);
	   }
	   
	   
	   if(form.pinpai.value=="")
	   {
	     alert("Please enter the product brand!");
		 form.pinpai.select();
		 return(false);
	   }
	   
	   if(form.xinghao.value=="")
	   {
	     alert("Please enter the product model number!");
		 form.xinghao.select();
		 return(false);
	   }
	   if(form.shuliang.value=="")
	   {
	     alert("Please enter the number of items!");
		 form.shuliang.select();
		 return(false);
	   }
	   if(form.jianjie.value=="")
	   {
	     alert("Please enter the product description!");
		 form.jianjie.select();
		 return(false);
	   }
	
	   return(true);
	}
    </script>
     <form name="form1" enctype="multipart/form-data" method="post" action="savenewgoods.php" onSubmit="return chkinput(this)">
	  <tr>
        <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">product name:</div></td>
        <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="mingcheng" size="25" class="inputcss"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">Time to market:</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
<select name="nian" class="inputcss">
<?php 
  	for($i=1995;$i<=2050;$i++){
?>
  <option><?php echo $i;?></option>
<?php 
  	}
?>
</select>          
Year
          <select name="yue" class="inputcss">
            <?php 
            for($i=1;$i<=12;$i++){
            ?>
           <option><?php echo $i;?></option>
            <?php 
             }
             ?>
          </select>
          Month
          <select name="ri" class="inputcss">
		  <?php 
            for($i=1;$i<=31;$i++){
            ?>
		  
            <option><?php echo $i;?></option>
		 <?php 
             }
             ?>
          </select>
          Day</div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">Price:</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">Market price:<input type="text" name="shichangjia" size="10" class="inputcss" >
          yuan&nbsp;&nbsp;member price:
          <input type="text" name="huiyuanjia" size="10" class="inputcss">
          yuan</div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">Product Types:</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
           <?php
			$sql=mysqli_query($conn,"select * from tb_type order by id desc");
			$info=mysqli_fetch_array($sql);
			if($info==false){
			  echo "Please add a product type first!";
			}
			else
			{
			?>
            <select name="typeid" class="inputcss">
			<?php
			do{
			?>
              <option value=<?php echo $info['id'];?>><?php echo $info['typename'];?></option>
			<?php
			}while($info=mysqli_fetch_array($sql));
			?>  
            </select>
            <?php
		     }
		    ?>
        </div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">Commodity grade:</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
          <select name="dengji" class="inputcss">
            <option selected value="Boutique">Boutique</option>
            <option value="general">general</option>
            <option value="second hand">second hand</option>
            <option value="Eliminate">Eliminate</option>
          </select>
        </div></td>
      </tr>
      <tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center">product brand:</div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="left"><input type="text" name="pinpai" class="inputcss" size="20"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">product model:</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="xinghao" class="inputcss" size="20"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">Whether to recommend:</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
          <select name="tuijian" class="inputcss" >
            <option selected value=1>Yes</option>
            <option value=0>No</option>
          </select>
     </div>
      </td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">Number of Product:</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="shuliang" class="inputcss" size="20"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">product pictur:</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        <input type="file" name="upfile" class="inputcss" size="30"></div></td>
      </tr>
      <tr>
        <td height="80" bgcolor="#FFFFFF"><div align="center">Product Description:</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><textarea name="jianjie" cols="80" rows="8" class="inputcss"></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input name="submit" type="submit" class="buttoncss" id="submit" value="Add to">
        &nbsp;&nbsp;<input type="reset" value="Rewrite" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>
