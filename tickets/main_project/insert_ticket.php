<?php
include_once '../db/database.php';
session_start();
    class Tickets
    { //connecting to db
        public function __construct()
    {
        $this->db = new db();
        $this->db = $this->db->connect();
    }

    public function Insert($thename, $thelast, $event, $pin) {
        
        $stmt = $this->db->prepare("SELECT ticket_code FROM active_tickets WHERE ticket_code = :pin");
        $stmt->bindValue(':pin', $pin, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo ('invalid');
        } else {
            $stmt = $this->db->prepare("INSERT INTO active_tickets(first, last, event, ticket_code) VALUES(:first, :last, :event, :code)");
            $stmt->bindValue(':first', $thename, PDO::PARAM_STR);
            $stmt->bindValue(':last', $thelast, PDO::PARAM_STR);
            $stmt->bindValue(':event', $event, PDO::PARAM_STR);
            $stmt->bindValue(':code', $pin, PDO::PARAM_STR);
            if ($stmt->execute()) {
              //  echo ('worked');
                echo '<a href="index.php"> U are done </a>';
                $stmt =  $this->db->prepare("ALTER TABLE active_tickets ADD Status VARCHAR(50) NOT NULL DEFAULT 'ACTIVE'");
               if($stmt->execute()) {
                   echo ('finally');
               }

                
                   
               }
            }
        }

   /*     function Active($thename, $thelast, $event, $pin) {
             $string = 'ACTIVE';
                   $stmt = $this->db->prepare("INSERT INTO active_tickets(Status) VALUES(:active)");
                   $stmt->bindValue(':active', $string, PDO::PARAM_STR);
                   if ($stmt->execute()) {
                      echo ('genious');
                   }
        }*/
    }

//}