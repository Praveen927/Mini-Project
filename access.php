<?php
include  "database.php"; 
$a=$_POST["Name"];
$b=$_POST["Age"];
$c=$_POST["Mail"];
$d=$_POST["Num"];
if(($a&&$b&&$c&&$d)=="")
{
echo "<script>alert('Please Enter All Require Details');window.location.href='form.html';</script>";
}
else
{
$sql2="CREATE TABLE IF NOT EXISTS `db`.`analysis` ( `SNo` INT(5) NOT NULL AUTO_INCREMENT ,  `Name` VARCHAR(20) NOT NULL ,  `Age` INT(5) NOT NULL ,  `Email` VARCHAR(20) NOT NULL ,  `Time` DATETIME NOT NULL ,    PRIMARY KEY  (`SNo`))";
if(mysqli_query($conn,$sql2)==false)
{
echo "NOPE".mysqli_connect_error();
}
else
{
$sql1="INSERT INTO analysis(Name,Age,Email) VALUES('$a','$b','$c')";
if(mysqli_query($conn,$sql1)==false)
{
echo "Fail".mysqli_connect_error();
}
else
{
echo "<script>window.location.href='selftest.html';</script>";
}
}
}
mysqli_close($conn);
?>
