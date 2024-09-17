<?php 
error_reporting(0);

    session_start();
    include ("../connection.php");

    if($_POST['update'])
{
$Name = $_POST['Name'];
$Mobile = $_POST['mobile'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
  
$query ="UPDATE admin set name='$Name', mobile='$Mobile', email='$Email', password='$Password'";
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
