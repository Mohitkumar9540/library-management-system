<?php 
   
   session_start();
   include ("../connection.php");
    
   $query = "DELETE * FROM categories WHERE ID =  $_GET[id]";
    $query_run  = mysqli_query($conn, $query);
      
?>
<script type="">
    alert("DELEED SUCCESSFULLY");
    window.location.href = "../Managecategories.php";
    </script>