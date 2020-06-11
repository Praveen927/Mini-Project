<?php
include "database.php";
$e=$_POST["Status"];
$sql1="CREATE TABLE `db`.`status` ( `SNo` INT(5) NOT NULL AUTO_INCREMENT ,  `Status` VARCHAR(20) NOT NULL ,    PRIMARY KEY  (`SNo`))";
if(mysqli_query($conn,$sql1)==false)
{
echo "NOPE".mysqli_connect_error();
}
else
{
$sql="INSERT INTO status(Status) VALUES('$e')";
if(mysqli_query($conn,$sql)==false)
{
echo "Fail".mysqli_connect_error();
}
else
{
echo "<script>window.location.href='index.html';</script>";
}
}
mysqli_close($conn);
?>