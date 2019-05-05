<?php
session_start();
include '../includes/header.php';
require_once 'admin/eventsFunctions.php';

$events = new Events();
$rows = $events->listEvents();

$i = 3;



?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/css.includes.css">
</head>

<body>

  
<div class="container2">
    <?php

    // displaying events from the db on the index page
    if (empty($rows)) { } else {
        foreach ($rows as $row) {
            if ($i == 0) {
                break;
            } else { ?>
                
                <div class="row">
            <div class ="elements">
                <div class = "primaryElem">
                    <div class ="headerPanel"> <span class="shop-item-title"><?php echo($row['eventName'])?></span></div>
                    <div class ="bodyPanel"><img src="imgs/<?php echo($row['eventIMG'])?>" class ="responsive_image"></div>
                    <div class ="footerPanel"><a href="ticketpage.php?id=<?php echo($row['eventID'])?>&eventnamn=<?php echo($row['eventName'])?>&price=<?php echo($row['priceEach'])?>&quantity=<?php echo($row['inStock'])?>&datum=<?php echo($row['eventDate'])?>" class="btn-tickets">Choose tickets</a>
                   <h2> Price: <span class="price-item" name="cambio"> <?php echo($row['priceEach'])?> KR </span></h2> 
                  </div>
            </div>
        </div>
    </div>
                

                <?php
                $i--;
            }
        }
    }
    ?>
</div>

</body>
                              
                            