<?php
include_once 'insert_ticket.php';
if (isset($_POST['active'])) {
    $thename = $_POST['firstName'];
    $thelast = $_POST['lastName'];
    $event = $_POST['theEvent'];
    $pin = $_POST['thePin'];

    $obj = new Tickets();
    $obj->Insert($thename, $thelast, $event, $pin);
  //  $obj->Active($thename, $thelast, $event, $pin);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <input type ="text" name="firstName" value="<?php echo $_GET['first']?>"readonly>
    <input type ="text" name="lastName"  value="<?php echo $_GET['last']?>" readonly>
    <input type ="text" name="theEvent" value="<?php echo $_GET['event']?>" readonly>
    <input type ="number" min="1" max="1000000" name="thePin">
    <input type="submit" name="active">
</form>
</body>
</html>