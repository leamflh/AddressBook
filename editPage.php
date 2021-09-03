<html>
    <head>
        
        <link rel='stylesheet'href='index.css' />
    </head>
    <body>
<h2>Modify </h2>

<?php


include("connection.inc.php");


if(isset($_GET['id'])){

$id=$_GET['id'];
$con=conn();

//query
$sql="SELECT  * FROM  contact WHERE `id`=$id";
$result=mysqli_query($con,$sql);
$ar="";

while($res=mysqli_fetch_assoc($result))
$ar=$ar."<table>

    <form method='post' action='modifyQuery.php?id=$id'>
    <tr><td>Name:</td><td><input type='text' name='name' value=".$res['Name']."></td></tr>
    <tr><td>Address:</td><td><input type='text' name='address' value=".$res['Address']."></td></tr>
    <tr><td>Phone:</td><td><input type='text' name='phone' value=".$res['Phone']."></td></tr>
    <tr><td>Mobile:</td><td><input type='text' name='mobile' value=".$res['Mobile']."></td></tr>
    <tr><td>E-mail:</td><td><input type='text' name='email' value=".$res['E-mail']."></td></tr>
    <tr><td>Website:</td><td><input type='text' name='website' value=".$res['Website']."></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td><input class='button' type='submit' ></td></tr>
    </form>



</table>";
mysqli_close($con);
echo $ar;

}





?>
</body>
</html>



