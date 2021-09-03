<?php
include("connection.inc.php");
$con=conn();

//query
    $sql="SELECT  * FROM  contact ";

    $result=mysqli_query($con,$sql);
    mysqli_close($con);

//to display table
    $ar="<tr class='fields'><th>Name </th><th>Address </th><th>Phone </th><th>Mobile </th><th>E-mail </th><th>Website </th></tr>";
    while($res=mysqli_fetch_assoc($result))
    $ar=$ar."<tr><th>".$res['Name']."</th><th>".$res['Address']."</th><th>".$res['Phone']."</th><th>".$res['Mobile']."</th><th>".$res['E-mail']."</th><th>".$res['Website']."</th>
    <th><button class='delete' onclick='deleteData(".$res['id'].")' value=".$res['id'].">Delete</button></th>
    <th><button onclick='modifyData(".$res['id'].")' value=".$res['id'].">Modify</button></th>
    </tr>";
    
    echo $ar;

?>