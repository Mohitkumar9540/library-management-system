<?php
$Name = $_POST['name'];
$Mobile = $_POST['mobile'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Address = $_POST['Address'];

 $conn = mysqli('localhost','root','','lms');
  if($conn->connect_error){
    die('Connection failed : ',$conn->connect_error);
  }
  else{
    $stmt = $conn->prepare("insert into form(name, mobile, email, password, Address)
     values(?,?,?,?,?)");
     $stmt->bind_param("sisss",$Name, $Mobile, $Email, $Password, $Address);
     $stmt->execute();
     echo "ragistered success";
     $stmt->close();
     $stmt->close();
  }
  
?>
<script type ="text/javascript">
    alert("ragistered success")
    window.location.href = "home.php";
    </script>