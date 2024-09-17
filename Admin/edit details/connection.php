<?php
$servername = "localhost";
$username = "root";
$password =  "";
$dbname = "lms";

$conn = mysqli_connect($servername,$username,$password,$dbname);
 if($conn){
    //echo "ok";
 }
 else{
    echo "n";
 }
?>
