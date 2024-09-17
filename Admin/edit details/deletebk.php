<?php 
   
   session_start();
   include ("../connection.php");
    
   $query = "DELETE * FROM books WHERE Book_no =  $_GET[bn]";
    $query_run  = mysqli_query($conn, $query);
      
?>
<script type="">
    alert("DELEED SUCCESSFULLY");
    window.location.href = "../Managebook.php";
    </script>