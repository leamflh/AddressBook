<?php
include("connection.inc.php");

if(isset($_GET['id'])){

$id=$_GET['id'];
$con=conn();

$sql="DELETE  FROM `contact` WHERE `id`='$id'";
$result=mysqli_query($con,$sql);
mysqli_close($con);
}


?>