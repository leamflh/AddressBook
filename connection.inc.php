<?php
///// utility file 
function conn(){ // kermel bs bde ghayir l db , dghre aaref wen.
     $idcon=mysqli_connect("127.0.0.1","root","","task"); ////haw exit 
     if(!$idcon){
          header('Location:error.html');
          exit();
     }
     
     
     return $idcon;
}

?>