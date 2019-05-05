<?php
$data = unserialize($_COOKIE['cookie'], ["allowed_classes" => false]);
 

 
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
    <style>
    body {
        counter-reset: my-sec-counter;
    }
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

.serial::before {
    counter-increment: my-sec-counter 234;
  content:  counter(my-sec-counter);
}
    </style>
</head>
<body>
<table id="items">
    <tbody id="inner">
    <tr>
        <th>Name</th>
        <th>Last Name</th>
        <th>Event</th>
        <th>SerialNumber</th>
        
        
        
    </tr>
    <tr id="tickets">

    </tr>
    
    </tbody>
    

</table>

<a href = "activate.php?quantity=<?php echo  $data['quant']?>&event=<?php echo $data['eventname']?>&first=<?php echo $data ['fname']?>&last=<?php echo $data['lname']?>&price=<?php echo $data['price']?>"> Home </a>

</body>
<script type="text/javascript">

let quantity = '<?php echo $data['quant'];?>'
let int = parseInt(quantity, 10)
console.log(int)
for (i = 0; i < int; i++) {
    let newTr = document.createElement('tr');
        let newHtml = `<td id="firstname"><?php echo $data['fname']?></td>
        <td id="lastname"><?php echo $data['lname']?></td>
        <td id="event"><?php echo $data['eventname']?></td>
        <td class="serial" id="pin"><?php echo $pin ?></td>
        `
        newTr.innerHTML = newHtml;
        let tbody = document.getElementById("inner");
        tbody.appendChild(newTr);
        localStorage.savename = document.getElementById('firstname').innerText;
        localStorage.savelast = document.getElementById('lastname').innerText;
        localStorage.saveevent = document.getElementById('event').innerText;
        localStorage.savepin = document.getElementById('pin').innerText;
        console.log(localStorage.savename);
}




</script>
</html>