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
                        
                        echo ('success');
                    }
                }
            }

             
                
            
            

}

}