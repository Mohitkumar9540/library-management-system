<?php 
error_reporting(0);

    session_start();
    include ("connection.php");

    if($_POST['update'])
{
$Name = $_POST['name'];
$Mobile = $_POST['mobile'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Address = $_POST['Address'];
  
$query ="UPDATE form set name='$Name', mobile='$Mobile', email='$Email', password='$Password', Address='$Address'";
$data = mysqli_query($conn,$query);

if($data)
{
   echo "DATA UPDATED SUCESSFUULLY";
}
else {
    echo "failed";
}

}
?>
