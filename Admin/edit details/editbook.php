<?php 
   
   session_start();
   include ("connection.php");
   
   $bookname = "";
   $bookno = ""; 
   $category = "";
   $price = "";
   $author ="";
   
   $query = "SELECT * FROM books WHERE Book_no =  $_GET[bn]";
  
     $query_run  = mysqli_query($conn, $query);
      while($row = mysqli_fetch_assoc($query_run)){
      $bookname = $row['Book_name'];
      $bookno = $row['Book_no']; 
      $category = $row['Categories'];
      $price = $row['Price'];
       $author = $row['Author'];
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
                <label for="name">Book Name:</label><br>
                <input type="text" name="name" class="form" value="<?php echo $bookname;?>" required><br>
                </div>

                <div class="form1">
                <label for="name">Book no:</label><br>
                <input type="number" name="no" class="form" value="<?php echo $bookno;?>" required> <br>
                </div>

                <div class="form1">
                <label for="name">Categories:</label><br>
                <input type="text" name="cat" class="form" value="<?php echo $category;?>" required><br> 
                </div>
 
                <div class="form1">
                <label for="name">Book Price:</label><br>
                <input type="varchar" name="price" class="form" value="<?php echo $price;?>" required><br>
                </div>

                <div class="form1">
                <label for="name">Author:</label><br>
                <input type="text" name="author" class="form" value="<?php echo $author;?>" required><br>
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
    $query = "UPDATE books SET Book_name = '$_POST[name]', Book_no = $_POST[no], 
    Categories = '$_POST[cat]', Price = $_POST[price], Author = '$_POST[author]' WHERE
    Book_no =  $_GET[bn]";
    $query_run  = mysqli_query($conn, $query);
    header("location:../Managebook.php");
}
?>
