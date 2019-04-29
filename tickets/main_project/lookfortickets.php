<?php
session_start();
if(isset($_SESSION['email']))  
{  
     echo '<h3>Login Success, Welcome - '.$_SESSION['email'].'</h3>';  
     echo '<br /><br /><a href="hej">Logout</a>';  
}  
else  
{  
      

    echo 'Du måste logga in först!';
    echo '<br /><br /><a href="registration.php">SIGN UP</a>';
}  
?>