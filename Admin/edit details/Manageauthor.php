<?php
session_start();
include ("connection.php");
include ("../functions.php");

$name = "";
$id = ""; 
$category = "";

$query = "SELECT * FROM Author ";

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
                    <th>AUTHOR NAME:</th>
                    <th>AUTHOR ID:</th>
                    <th>BOOKS:</th>
                    <th>ACTION:</th>
                </tr>
                <?php
                $query_run  = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($query_run)){
                  $name = $row['Name'];
                  $id = $row['authorid']; 
                  $category = $row['Book'];            
                
                 ?>
                 <tr>
                  <td><?php echo $name;?></td>
                  <td><?php echo $id;?></td>
                  <td><?php echo $category;?></td>
                  <td><a href="editaut.php?id=
                  <?php echo $row['authorid'];?>">Edit</a>
                      <a href="deleteat.php?id=
                  <?php echo $row['authorid'];?>">Delete</a></td>
                  
                <?php
                } ?>
                 </tr>
             </table>
           </form>

         </div>
</body> 
</html>