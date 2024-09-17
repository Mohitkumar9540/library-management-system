<?php 
    session_start();
    include ("connection.php");
    $name = "";
    $mobile = ""; 
    $email = "";
    $address = "";

    $query = "SELECT * FROM form ";
    $query_run  = mysqli_query($conn, $query);
    $total = mysqli_num_rows($query_run);    
    $row = mysqli_fetch_assoc($query_run);                             
    if($total != 0){
        $name = $row['Name'];
        $mobile = $row['mobile']; 
        $email = $row['Email'];
        $pass = $row['Password'];
        $address = $row['Address'];

    }
    else{
        echo  "No record present";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Profile</title>
    <link rel="stylesheet" type="text/css" href="epro.css">
</head>
<body>
    <div class="nav">
        <div class="container">
            <div class="nav-header">
           <h2>Library Management system(LMS)</h2>
            </div>
            <ul>
                <li><a href=""> user profile</a>
                  <div class="dropdown">
                  <ul>             
                  <li><a href="../my profile/myprofile.php">My profile</a></li>
                     <li><a href="../edit prrofile/edprofile.php">Edit profile</a></li>
                  </ul>
                  </div>
                </li>
            <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div><br>
    <span><marquee>This is Library Management System. Library open at 8:00 Am
         and close at 8:00 Pm</marquee></span><br><br>

            <div class="form"><center>
                <h1>Welcome <?php echo $name;?></h1><br></center>
                <form action="login.php" method="POST">

                <div class="form1">
                <label>Full Name:</label><br>
                <input type="text" value="<?php echo $name;?>" class="form" disabled><br>
                </div>

                <div class="form1">
                <label>Mobile no:</label><br>
                <input type="number"  value="<?php echo $mobile;?>" class="form" disabled> <br>
                </div>

                <div class="form1">
                <label>E-mail:</label><br>
                <input type="email"  value="<?php echo $email;?>" class="form" disabled><br> 
                </div>
 
                <div class="form1">
                <label>Password:</label><br>
                <input type="text"  value="<?php echo $pass;?>" class="form" disabled><br>
                </div>

                <div class="form1">
                <label>Address</label><br>
                <textarea s" id="" cols="40" rows="5" value="<?php echo $address;?>"> </textarea><br><br>
                </div>


            </form>           
         </div>

       
</body> 
</html>