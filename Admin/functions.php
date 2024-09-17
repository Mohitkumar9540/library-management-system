<?php 
    function get_user_count(){
    session_start();
    include ("../connection.php");

    $query = "SELECT count(*) AS USER_COUNT FROM form ";
    $query_run  = mysqli_query($conn, $query);
        
    while($row = mysqli_fetch_assoc($query_run)){
       $USER_COUNT = $row['USER_COUNT'];
       
    }
       return($USER_COUNT);
    }


    function get_book_count(){
    
        include ("../connection.php");
        $query = "SELECT count(*) AS BOOK_COUNT FROM books";
        $query_run  = mysqli_query($conn, $query);
            
        while($row = mysqli_fetch_assoc($query_run)){
         $BOOK_COUNT = $row['BOOK_COUNT'];
        }
           return($BOOK_COUNT);
        }

        
    function get_cat_count(){
    
        include ("../connection.php");
        $query = "SELECT count(*) AS CAT_COUNT FROM categories";
        $query_run  = mysqli_query($conn, $query);
            
        while($row = mysqli_fetch_assoc($query_run)){
         $CAT_COUNT = $row['CAT_COUNT'];
        }
           return($CAT_COUNT);
        }



    function get_aut_count(){

            include ("../connection.php");
            $query = "SELECT count(*) AS AUT_COUNT FROM Author";
            $query_run  = mysqli_query($conn, $query);
                
            while($row = mysqli_fetch_assoc($query_run)){
               $AUT_COUNT = $row['AUT_COUNT'];
            }
               return($AUT_COUNT);
            }  


            function get_issue_count(){

                include ("../connection.php");
                $query = "SELECT count(*) AS ISSUE_COUNT FROM issuebook";
                $query_run  = mysqli_query($conn, $query);
                    
                while($row = mysqli_fetch_assoc($query_run)){
                  $ISSUE_COUNT = $row['ISSUE_COUNT'];
                }
                   return($ISSUE_COUNT);
                }              
    ?>