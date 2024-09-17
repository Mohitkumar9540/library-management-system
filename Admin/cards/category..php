<?php
session_start();
include ("connection.php");
include ("../functions.php");

$id = "";
$name = "";
$cat = ""; 

$query = "SELECT * FROM categories ";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="cards.css">
</head>
<body>
    <div class="nav">
        <div class="container">
            <div class="nav-header">
           <h2>Library Management system(LMS)</h2>
           </div>
            <ul>
                <li><a href="">Admin profile</a>
                  <div class="dropdown">
                  <ul>             
                     <li><a href="my profile/myprofile.php">My profile</a></li>
                     <li><a href="../edit prrofile/edprofile.php">Edit profile</a></li>
                     <li><a href="chpro.php">Change password</a></li>
                  </ul>
                  </div>
                </li>
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
                    <Th>ID</Th>
                    <th>NAME:</th>                   
                    <th>CATEGORY:</th>
                </tr>
                <?php
                $query_run  = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($query_run)){
                  $id = $row['ID'];
                  $name = $row['Name']; 
                  $cat = $row['Categories'];
              
                 ?>
                 <tr>
                  <td><?php echo $id;?></td>
                  <td><?php echo $name;?></td>
                  <td><?php echo $cat;?></td>

                <?php
                } ?>
                 </tr>
             </table>
             <button><a href="addata/c.php">ADD BOOK CATEGORY</a></button></center>
           </form>

         </div>
</body> 
</html>