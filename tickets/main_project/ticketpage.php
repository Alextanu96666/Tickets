<?php
session_start();
if(isset($_SESSION['email']))  
{  
   $name = $_GET['eventnamn'];
    $id = $_GET['id'];
    $price = $_GET['price'];
      
    include_once 'tickets.php';
} else {
    echo ('You need to login first');
    echo '<br /><br /><a href="login.php">LOGIN</a>';

    
}
    
  
?>


