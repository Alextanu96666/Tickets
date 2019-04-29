<?php
session_start();
if(isset($_SESSION['email']))  
{  
   $name = $_GET['eventnamn'];
    $id = $_GET['id'];
    $price = $_GET['price'];
    echo ($name);
    echo ($id);
    echo ($price);
} else {
    echo ('error');
}
    
  
?>


<h3> How many tickets do you want for <?php echo ($name) ?> ?</h3>
<input type = "number" min= "1" max = "20" name="quantity" class="quantity-input">
<a href = "#">addToCart</a>