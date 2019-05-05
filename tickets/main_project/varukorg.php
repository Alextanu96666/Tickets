<?php



    require_once 'admin/varukorg.function.php';
    if (isset($_POST['submit'])){
        
        $quantity = $_POST['quantity-ghost'];
        $id = $_GET['id'];
        $name = $_GET['eventnamn'];
        $datum = $_GET['datum'];
        $instock = $_GET['instock'];
        $user = $_GET['user'];
        $obj = new Varukorg();
        $obj->decrement($id, $name, $quantity, $instock, $datum, $user);
        $obj->insertToDb($id, $name, $quantity, $instock, $datum, $user);
        
    
} 



function generatePIN($digits = 4){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
$pin = generatePIN();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <style>
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
</head>
<body>
<form method="post">
<table id="items">
    <tbody id="inner">
    <tr>
        <th>Event</th>
        <th>Date</th>
        <th>Price</th>
        <th>removeBTN</th>
        
        
    </tr>
    <tr id="tickets">
    </tr>
    
    </tbody>
    

</table>
Total: <span id="total"> 0 </span>

<input type="number" id="ghost" name="quantity-ghost" min="1" max="10" readonly style="display: none">
<button name="submit" id="buy-btn" onclick="sendData()"> BUY </button>

</form>

</body>
<script type="text/javascript">
let newInt = +localStorage.getItem('quant');
let newInt2 = +localStorage.getItem('price');


    console.log(newInt);
    console.log(newInt2);
    for (i = 0; i < newInt; i++) {
        let newTr = document.createElement('tr');
        let newHtml = `<td name="eventname">${localStorage.eventname}</td>
        <td name="date">Date</td>
        <td name="price">${localStorage.price}</td>
        <td name="btn-danger"><a href="#" class="remove-btn">REMOVE</a></td>`
        newTr.innerHTML = newHtml;
        let tbody = document.getElementById("inner");
        tbody.appendChild(newTr);
        
        
    }

    
            
        
    
    
    
</script>
<script src="javascript/varukorg.js"></script>

</html>

<?php 


?>