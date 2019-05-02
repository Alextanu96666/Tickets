<?php
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
<table id="items">
    <tbody id="inner">
    <tr>
        <th>Event</th>
        <th>Date</th>
        <th>PIN</th>
        
        
    </tr>
    <tr id="tickets">
    </tr>
    
    </tbody>
    

</table>
    
</body>
<script type="text/javascript">
    let newInt = +localStorage.getItem('quant');
    console.log(newInt);
    for (i = 0; i < newInt; i++) {
        let newTr = document.createElement('tr');
        let newHtml = `<td>${localStorage.eventname}</td>
        <td>Date</td>
        <td><?php echo $pin ?></td>`
        newTr.innerHTML = newHtml;
        let tbody = document.getElementById("inner");
        tbody.appendChild(newTr);
    }
</script>
</html>

