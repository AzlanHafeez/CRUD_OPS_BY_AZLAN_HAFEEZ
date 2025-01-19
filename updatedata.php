<?php 
include "database.php";
$id =  $_POST["sid"];
$name = $_POST['sname'];
$address = $_POST['saddress'];
$class = $_POST['class'];
$phone = $_POST['sphone'];

 $update = "UPDATE `crud-data` SET `Name`='$name',`Class`='$class',`Address`='$address',`Phone`='$phone' WHERE `S.No` = '$id'";
 
 $run = mysqli_query($connection, $update);
if (!$run) {
    die ("Query Failed" .  mysqli_error($connection));
}else{
    header("location:index.php");
    mysqli_close($connection);
}
?>