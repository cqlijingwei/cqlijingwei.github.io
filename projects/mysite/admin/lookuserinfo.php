<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>User information management</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php
include("conn/conn.php");
$id=$_GET['id'];
$sql=mysqli_query($conn,"select * from tb_user where id=".$id."");
$info=mysqli_fetch_array($sql);
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">User information view</div></td>
  </tr>
  <tr>
    <td height="98" bgcolor="#666666"><table width="650" border="0" align="center" cellpadding="0" cellspacing="1">
      <!--DWLayoutTable-->
      <tr>
        <td width="99" height="20" bgcolor="#FFFFFF"><div align="center">User's Nickname:</div></td>
        <td width="180" bgcolor="#FFFFFF"><div align="left"><?php echo $info['name'];?></div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center">User status:</div></td>
        <td width="266" bgcolor="#FFFFFF"><div align="left"><?php
	 if($info['dongjie']==0)
	  {
	    echo "Unfrozen state";
	  }
	  else
	  { 
	   echo "Frozen state"; 
	  }
		?></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">Actual name:</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['truename'];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">E-mail：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['email'];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">Contact number:</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['tel'];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">Registration time:</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['regtime'];?></div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td height="20"><div align="center"><a href="dongjieuser.php?id=<?php echo $id;?>">
	<?php
	 $sql=mysqli_query($conn,"select * from tb_user where id=".$id."");
	 $info=mysqli_fetch_array($sql);
	 if($info['dongjie']==0)
	  {
	    echo "Freeze the user";
	  }
	  else
	  {
	    echo "Unfreeze";
	  }
	?></a></div></td>
  </tr>
</table>
</body>
</html>
