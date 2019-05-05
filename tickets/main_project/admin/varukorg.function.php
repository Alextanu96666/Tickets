<?php
include_once '../db/database.php';

class Varukorg
{
    public function __construct()
    {
        $this->db = new db();
        $this->db = $this->db->connect();
    }

    public function decrement($id, $name, $quantity, $instock, $datum, $user) {
        $stmt = $this->db->query("UPDATE events SET inStock=inStock-$quantity WHERE eventId = $id");
        
        
        
    }

    public function insertToDb($id, $name, $quantity, $instock, $datum, $user) {
            $stmt = $this->db->prepare("SELECT usersID, email FROM users WHERE email = :user");
            $stmt->bindValue(':user', $user, PDO::PARAM_STR);
            if ($stmt->execute()) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $stmt2 = $this->db->prepare('INSERT INTO orders(user, usersID) VALUES (:user, :id)');
                    $stmt2->bindValue(':user', $user, PDO::PARAM_STR);
                    $stmt2->bindValue(':id', $row['usersID'], PDO::PARAM_STR);
                    if ($stmt2->execute()) {
                        $sql1=$this->db->prepare("SELECT ordersID, user FROM orders WHERE user = :user");
                        $sql1->bindValue(':user', $user, PDO::PARAM_STR);
                        if ($sql1->execute()) {
                            while ($row2 = $sql1->fetch(PDO::FETCH_ASSOC)) {
                                echo $row2['ordersID'];
                                $sql2=$this->db->prepare("SELECT eventID FROM events WHERE eventID = :id");
                                $sql2->bindValue(':id', $id, PDO::PARAM_STR);
                                if ($sql2->execute()) {
                                    while ($row3 = $sql2->fetch(PDO::FETCH_ASSOC)) {
                                        $sqlfinal = $this->db->prepare("INSERT INTO ordersdetail(ordersID, eventID) VALUES (:order, :id)");
                                        $sqlfinal->bindValue(':order', $row2['ordersID'], PDO::PARAM_STR);
                                        $sqlfinal->bindValue(':id', $row3['eventID'], PDO::PARAM_STR);
                                        $sqlfinal->execute();
                                    }
                                }
                            }
                        }
                         
                    }
                }
            }
            

             
                
            
            

}

}