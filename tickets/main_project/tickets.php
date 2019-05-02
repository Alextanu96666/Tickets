<?php

?>


<form>
<h3> How many tickets do you want for <?php echo ($name) ?> ?</h3> </br>
<h3>Name</h3>
<input type="text" name="write_name" placeholder="Name" id="first">
<h3>Last Name</h3>
<input type="text" name="write_lname" placeholder="Last Name" id="last"> </br> 
<h3>How Many Tickets Do You Want?</h3>
<input type = "number" min= "1" max = "20" name="quantity" class="quantity-input" id="quantity_input"> </br> </br>
<a href = "#">addToCart</a>
<button type="button" id="saveCookie" name ="save_cookie" onclick="saveTickets()">Save</button>
<button type="button" id="loadCookiebtn" name ="load_cookie" onclick="loadCookie()">Load</button>


</form>
<script src="javascript/tickets.js"></script>


