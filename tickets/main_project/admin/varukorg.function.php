<?php
include_once '../db/database.php';

class Varukorg
{
    public function __construct()
    {
        $this->db = new db();
        $this->db = $this->db->connect();
    }

    public function test($id, $name, $quantity) {
        echo $quantity;
    }

}