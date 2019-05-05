<?php   
 session_start(); 
 // logout
 if (isset($_SESSION['email'])) {
     session_destroy();  
     header("location:index.php");  

 } 
 if (isset($_SESSION['admin'])) {
    session_destroy();  
    header("location:index.php");  

} 
 ?> 