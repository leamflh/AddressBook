<?php
include("connection.inc.php");
if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['website']) ){

    $con=conn();
    
    

$name=htmlspecialchars($_POST['name']);
$address=htmlspecialchars($_POST['address']);
$phone=htmlspecialchars($_POST['phone']);
$mobile=htmlspecialchars($_POST['mobile']);
$email=htmlspecialchars($_POST['email']);
$website=htmlspecialchars($_POST['website']);

//query

$sql="INSERT INTO `contact` (`Name`, `Address`, `Phone`, `Mobile`, `E-mail`, `Website`) 
VALUES ('$name', '$address', '$phone', '$mobile', '$email', '$website');";


$result=mysqli_query($con,$sql);
mysqli_close($con);


header('location:index.html');
   
    }


?>