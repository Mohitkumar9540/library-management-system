<?php 
   session_start();
   include ("connection.php");
 
   $name = "";
   $id = ""; 
   $book = "";
      
   $query = "SELECT * FROM author WHERE 
authorid  =  $_GET[id]";
  
     $query_run  = mysqli_query($conn, $query);
      while($row = mysqli_fetch_assoc($query_run)){
      $name = $row['Name'];
      $id = $row['authorid']; 
      $book = $row['Book'];
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="edit.css">
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
       
            <div class="form">
                <form action="#" method="POST">

                <div class="form1">
                <label for="name">Author Name:</label><br>
                <input type="text" name="name" class="form" value="<?php echo $name;?>" required><br>
                </div>

                <div class="form1">
                <label for="name">Author id:</label><br>
                <input type="number" name="id" class="form" value="<?php echo $id;?>" required> <br>
                </div>

                <div class="form1">
                <label for="name">Books:</label><br>
                <input type="text" name="book" class="form" value="<?php echo $book;?>" required><br> 
                </div>
 
                <div class="form2">
                <input type="submit" class="btn" id ="submit" value="Update" name="sub">
                </div>
            </form>           
         </div>
</body> 
</html>


<?php
error_reporting(0);
if(isset($_POST['sub']))
{
    $query = "UPDATE author SET Name = '$_POST[name]', 
authorid  = $_POST[id], 
    Book = '$_POST[book]' WHERE
    
authorid  =  $_GET[id]";
    $query_run  = mysqli_query($conn, $query);
    header("location:../Manageauthor.php");
}
?>
