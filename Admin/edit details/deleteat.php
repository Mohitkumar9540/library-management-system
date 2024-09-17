    <?php 
    
    session_start();
    include ("../connection.php");
        
    $query = "DELETE * FROM author WHERE autorid =  $_GET[id]";
        $query_run  = mysqli_query($conn, $query);
        
    ?>
    <script type="">
        alert("DELEED SUCCESSFULLY");
        window.location.href = "../Manageauthor.php";
        </script>