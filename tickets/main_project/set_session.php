<?php
session_start();
if(isset($_SESSION['email']))  
{  
  //   echo '<h3>Login Success, Welcome - '.$_SESSION['email'].'</h3>';  
   //  echo '<br /><br /><a href="hej">Logout</a>';  
   header('location: index.php');
}  
else  
{  
      

    echo 'Du måste logga in först!';
    echo '<br /><br /><a href="registration.php">SIGN UP</a>';
    echo '<br /><br /><a href="index.php">Login</a>';

}  
?>