<?php 
    session_start();
    include ("../connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="addata.css">
</head>
<body>
    <div class="nav">
        <div class="container">
            <div class="nav-header">
           <h2>Library Management system(LMS)</h2>
            </div>
            <ul>
                <li><a href="logout.php">logout</a></li>
            </ul>

        </div>
    </div><br>
    <span><marquee>This is Library Management System. Library open at 8:00 Am
         and close at 8:00 Pm</marquee></span><br><br>
         <div class="row">
             
         
            <div class="form">
                <h1>ISSUE BOOK</h1><br>
                <form action="#" method="POST">

                <div class="form1">
                <label for="name">Full Name:</label><br>
                <input type="text" name="Name" class="form" required><br>
                </div>

                <div class="form1">
                <label for="name">Book name:</label><br>
                <input type="text" name="Book" class="form" required> <br>
                </div>

                <div class="form1">
                <label for="name">Issue Date:</label><br>
                <input type="date" name="IssueDate" class="form" required><br> 
                </div>
 
                <div class="form1">
                <label for="name">Mobile no:</label><br>
                <input type="varchar" name="Mobile" class="form" required><br>
                </div>

                <div class="form2">
                <input type="submit" class="btn" id ="submit" value="submit" name="sub">
                </div>
            </form>           
         </div></div>
</body> 
</html>


<?php
error_reporting(0);
if($_POST['sub'])
{
$Name = $_POST['Name'];
$book = $_POST['Book'];
$Issudate = $_POST['IssueDate'];
$Mobile = $_POST['Mobile'];
  
$query ="INSERT INTO issuebook VALUES('$Name', '$book', '$Issudate', '$Mobile')";
$data = mysqli_query($conn,$query);

if($data)
{
  echo "DATA INSERTED SUCESSFUULLY";
}
else {
    echo "failed";
}

}
if(isset($_POST['sub'])) {
   // header('location:login.php');
}
?>
