<?php
    $conn=mysqli_connect("localhost","root","root","db_shop") or die("The database server connection error
".mysqli_error());
    mysqli_query($conn,"set names gb2312");
?>
