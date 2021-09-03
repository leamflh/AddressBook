<?php
include("connection.inc.php");
if(isset($_GET['id']) && isset($_POST['name']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['website']) ){

    $id=$_GET['id'];
    $con=conn();
    
    

$name=htmlspecialchars($_POST['name']);
$address=htmlspecialchars($_POST['address']);
$phone=htmlspecialchars($_POST['phone']);
$mobile=htmlspecialchars($_POST['mobile']);
$email=htmlspecialchars($_POST['email']);
$website=htmlspecialchars($_POST['website']);

//query
$sql="UPDATE `contact` 
SET `Name` = '$name', `Address` = '$address', `Phone` = '$phone', `Mobile` = '$mobile', `E-mail` = '$email', `Website` = '$website'
 WHERE `contact`.`id` = $id;";


$result=mysqli_query($con,$sql);
mysqli_close($con);


header('location:index.html');
   
    }


?>