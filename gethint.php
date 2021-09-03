<?php

$link=mysqli_connect("localhost","root","","task");


$q = $_REQUEST["q"];

$sql="SELECT  * FROM  contact WHERE `Name` LIKE '%$q%' ";
$result=mysqli_query($link,$sql);
$ar="<tr><th>Name </th><th>Address </th><th>Phone </th><th>Mobile </th><th>E-mail </th><th>Website </th></tr>";
    while($res=mysqli_fetch_assoc($result))
    $ar=$ar."<tr><th>".$res['Name']."</th><th>".$res['Address']."</th><th>".$res['Phone']."</th><th>".$res['Mobile']."</th><th>".$res['E-mail']."</th><th>".$res['Website']."</th>
    <th><button onclick='delete1(".$res['id'].")' value=".$res['id'].">Delete".$res['id']."</button></th>
   
    </tr>";
    
    echo $ar;

?>