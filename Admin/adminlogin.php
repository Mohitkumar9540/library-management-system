<?php 
    session_start();
    include '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="../home.css">
</head>
<body>
    <div class="nav">
        <div class="container">
            <div class="nav-header">
           <h2>Library Management system(LMS)</h2>
            </div>
            <ul>
                <li><a href="Admin/adminlogin.php">Admin Login</a></li>
                <li><a href="../login.php">User Login</a></li>
                <li><a href="../home1.php">Ragister</a></li>
            </ul>

        </div>
    </div><br>
    <span><marquee>This is Library Management System. Library open at 8:00 Am
         and close at 8:00 Pm</marquee></span><br><br>
         <div class="row">
            <div class="col">
                <h3>Library Timing</h3><br>
                <ul>
                    <li>Opening Timing: 8:00 Am</li>
                    <li>Closing Timing: 8:00 Pm</li>
                    <li>(Sunday off)</li><br>
               </ul>
               <h3>What we provide ?</h3><br>
               <ul>
                <li>Full furniiture</li>
                <li>Free Wifi</li>
                <li>Air condition</li>         
                <li>News paper</li>
                <li>Disscussion Room</li>
                <li>Peacefull Environment</li>
              </ul>
              
            </div>
            <div class="form">
                <h1>Admin Login </h1><br>
                <form action="#" method="POST">

                <div class="form1">
                <label for="name">Full Name:</label><br>
                <input type="text" name="name" class="form" required><br>
                </div>

                <div class="form1">
                <label for="name">E-mail:</label><br>
                <input type="email" name="email" class="form" required><br> 
                </div>
 
                <div class="form1">
                <label for="name">Password:</label><br>
                <input type="password" name="password" class="form" required><br>
                </div>


                <div class="form2">
                <input type="submit" class="btn" id="submit" value="submit" name="sub">
                </div>
            </form>           
         </div>
</body> 
</html>

<?php
error_reporting(0);

   if(isset($_POST['sub'])) 
    {
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $query = "SELECT * FROM admin WHERE Email = '$email' && Password = '$pwd' ";
        $query_run  = mysqli_query($conn, $query);
        $total = mysqli_num_rows($query_run);    
          // echo $total;

        if($total != 0) {
            echo "login";
           $_SESSION['em'] = $email;
           $_SESSION['pw'] = $pwd;
           header('location:admin.php');
        }
        else {
           ?> 
            <br><br>
        <center>
            <span class="alert-danger">Wrong password</span>
        </center>

           
           
           <?php
        }
    }
      
?>



































































