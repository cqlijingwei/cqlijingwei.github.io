
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Product category management</title>
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
$sql=mysqli_query($conn,"select * from tb_type order by id desc");
$info=mysqli_fetch_array($sql);
 if($info==false)
  {
    echo "There are no product categories on this site!";
   }
  else
  {
?>
<div align="center">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
   <form name="form1" method="post" action="deletelb.php">
    <tr>
      <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">Product category management</div></td>
    </tr>
    <tr>
      <td height="20" bgcolor="#666666"><table width="400" border="0" align="center" cellpadding="0" cellspacing="1">
        <tr>
          <td width="253" height="20" bgcolor="#FFFFFF"><div align="center">Classification name</div></td>
          <td width="144" bgcolor="#FFFFFF"><div align="center">Operating</div></td>
        </tr>
		<?php
		  do
		  {
		?>
        <tr>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info['typename'];?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><input type="checkbox" value=<?php echo $info['id'];?> name="<?php echo $info['id'];?>"> </div></td>
        </tr>
		
		<?php
		 }
		 while($info=mysqli_fetch_array($sql));
		?>
		<tr>
          <td height="20" bgcolor="#FFFFFF"><div align="center"></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="Delete option" class="buttoncss"></div></td>
        </tr>
      </table></td>
    </tr>
	</form>
  </table>
</div>
<?php
 }
?>
</body>
</html>
