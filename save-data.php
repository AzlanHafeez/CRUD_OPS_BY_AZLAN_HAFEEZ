<?php 
include "database.php";


$name = $_POST['sname'];
$address = $_POST['saddress'];
$class = $_POST['class'];
$phone = $_POST['sphone'];

$insert = "INSERT INTO `crud-data`(`S.No`, `Name`, `Address`, `Class`, `Phone`) VALUES (NULL,'{$name}','{$address}','{$class}','{$phone}')";

$run = mysqli_query($connection, $insert);
if (!$run) {
    die ("Query Failed" .  mysqli_error($connection));
}else{
    header("location:index.php");
    mysqli_close($connection);
}
?>