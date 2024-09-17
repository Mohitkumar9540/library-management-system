<?php
session_start();
include ("connection.php");
include ("../functions.php");

$bookname = "";
$bookno = ""; 
$category = "";
$price = "";
$author ="";

$query = "SELECT * FROM books ";

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
                
            <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div><br>
    <marquee>This is Library Management System. Library open at 8:00 Am
         and close at 8:00 Pm</marquee><br><br>

         <div class="details">
           <form action=""><center>
             <table>
                <tr>
                    <th>BOOK NAME:</th>
                    <th>SERIAL NO:</th>
                    <th>CATEGORY:</th>
                    <th>PRICE:</th>
                    <th>AUTHOR:</th>
                    <th>ACTION:</th>
                </tr>
                <?php
                $query_run  = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($query_run)){
                  $bookname = $row['Book_name'];
                  $bookno = $row['Book_no']; 
                  $category = $row['Categories'];
                  $price = $row['Price'];
                  $author = $row['Author'];
                
                 ?>
                 <tr>
                  <td><?php echo $bookname;?></td>
                  <td><?php echo $bookno;?></td>
                  <td><?php echo $category;?></td>
                  <td><?php echo $price;?></td>
                  <td><?php echo $author;?></td>
                  <td><a href="editbook.php?bn=
                  <?php echo $row['Book_no'];?>">Edit</a>
                      <a href="deletebk.php?bn=
                  <?php echo $row['Book_no'];?>">Delete</a></td>
                <?php
                } ?>
                 </tr>
             </table>
           </form>

         </div>
</body> 
</html>