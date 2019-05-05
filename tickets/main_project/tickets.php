<?php

?>


<form method="post" action="varukorg.php">
<p> How many tickets do you want for: <span id="event" style="display:inline"> <?php echo ($name) ?> </span> ?</p>
<h3>Name</h3>
<input type="text" name="write_name" placeholder="Name" id="first">
<h3>Last Name</h3>
<input type="text" name="write_lname" placeholder="Last Name" id="last"> </br> 
<h3>How Many Tickets Do You Want? Price each: <span id="thePrice" style="display: inline"><?php echo ($price) ?></span> </br> </br>
<input type = "number" min= "1" max = "20" name="quantity" class="quantity-input" id="quantity_input"> </br> </br>
<a href = "varukorg.php?id=<?php echo($id)?>&eventnamn=<?php echo($name)?>&price=<?php echo($price)?>&datum=<?php echo ($datum)?>&instock=<?php echo($quantity_inStock)?>&user=<?php echo $_SESSION['email']?>" id="saveCookie" name ="save_cookie" onclick="saveTickets()">addToCart</a>
<button type="submit" id="savesCookie" name ="saves_cookie">Save</button>
<button type="button" id="loadCookiebtn" name ="load_cookie" onclick="loadCookie()">Load</button>


</form>
<script src="javascript/tickets.js"></script>


