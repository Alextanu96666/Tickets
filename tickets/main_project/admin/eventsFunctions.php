<?php


class Events
{
    public function __construct()
    {
        $this->db = new db();
        $this->db = $this->db->connect();
    }

}

?>