<?php
include_once '../db/database.php';

class Events
{
    public function __construct()
    {
        $this->db = new db();
        $this->db = $this->db->connect();
    }

    public function listEvents() {
       $stmt = $this->db->prepare("SELECT eventName, eventIMG, eventID, priceEach FROM events");
       if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
        }
    }
                
                
            
        

}

}

?>