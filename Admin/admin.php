<?php 
   // error_reporting(0);
    include ("functions.php");
    ?>
    
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Admin</title>
    <link rel="stylesheet" type="text/css" href="epro.css">
</head>
<body>
    <div class="nav">
        <div class="container">
            <div class="nav-header">
           <h2>Library Management system(LMS)</h2>
           </div>
            <ul>
                <li><a href=""> Admin profile</a>
                
                  <div class="dropdown">
                  <ul>             
                     <li><a href="../my profile/myprofile.php">My profile</a></li>
                     <li><a href="../edit prrofile/edprofile.php">Edit profile</a></li>
                  </ul>
                  </div>
                </li>
            <li><a href="../logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="nav2">
    <ul>
        <li><h3>Dashboard</h3></li>

        <li>Book</a>
          <div class="drdown">
          <ul>
            <li><a href="cards/book..php">Add book</a></li>
            <li><a href="edit details/Managebook.php">Manage book</a></li>
          </ul>
           </div>
         </li>

         <li>Categories</a>
            <div class="drdown">
                <ul>
                  <li><a href="cards/category..php">Add category</a></li>
                  <li><a href="edit details/Managecategories.php">Manage category</a></li>
                </ul>
                 </div>
         </li>

         <li> Author</a>
            <div class="drdown">
                <ul>
                    <li><a href="cards/author..php">Add Author</a></li>
                    <li><a href="edit details/Manageauthor.php">Manage Author</a></li>
                </ul>
                 </div>
         </li>

         <li><a href="cards/detail..php">Issue book</a></li>
    </ul>
        </div><br>

    <marquee>This is Library Management System. Library open at 8:00 Am
         and close at 8:00 Pm</marquee><br><br>

         <div class="packages">
            <div class="card">
                <header>Ragistered users</header>
                 <p>No. of available books: <?php echo get_book_count(); ?></p> 
                <button style="background-color: rgb(22, 155, 155);"><a href="cards/book..php">VIEW BOOKS</a></button> 
            </div>
            <div class="card">                
                <header>Ragistered users</header>
                <p>No. of total users: <?php echo get_user_count(); ?></p>
               <button style="background-color: brown;"><a href="cards/user..php">VIEW USERS</a></button> 

            </div>
            <div class="card">
                <header>Ragistered users</header>
                 <p>Book categories: <?php echo get_cat_count(); ?></p>
              <button style="background-color: rgb(50, 68, 235);"><a href="cards/category..php">VIEW CATEORIES</a></button> 

             </div>
             <div class="card">
                <header>Ragistered users</header>
                <p>No. of Issued Book: <?php echo get_aut_count(); ?> </p>
              <button style="background-color: rgb(255, 59, 59);"><a href="cards/detail..php">VIEW ISSUED BOOK</a></button> 

             </div>
             <div class="card">
                <header>Ragistered users</header>
              <p>No. of available authors: <?php echo get_aut_count(); ?> </p>
               <button style="background-color: rgb(250, 73, 141);"><a href="cards/author..php">VIEW AUTHORS</a></button> 

             </div>
        </div>
</html>