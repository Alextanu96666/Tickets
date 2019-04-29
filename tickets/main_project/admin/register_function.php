<?php
include_once '../db/database.php';
session_start();
    class Registration
    {
        public function __construct()
    {
        $this->db = new db();
        $this->db = $this->db->connect();
    }

    public function VerifyEmail($data_array) {
        $stmt = $this->db->prepare("SELECT email FROM users WHERE email = :email");
        $stmt->bindValue(':email', $data_array[':email'], PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo "Choose othe email";
        } else {
            $stmt = $this->db->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)");
            $stmt->bindValue(':firstname', $data_array[':first'], PDO::PARAM_STR);
            $stmt->bindValue(':lastname', $data_array[':last'], PDO::PARAM_STR);
            $stmt->bindValue(':email', $data_array[':email'], PDO::PARAM_STR);
            $stmt->bindValue(':password', $data_array[':password'], PDO::PARAM_STR);
            $stmt->execute();
            header('location: login.php');
            
            
        }
    }

    public function Login($data_array2) {
        $stmt = $this->db->prepare("SELECT email, password FROM users WHERE email = :email AND password = :password");
        $stmt->bindValue(':email', $data_array2[':email'], PDO::PARAM_STR);
        $stmt->bindValue(':password', $data_array2[':password'], PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            $_SESSION['email'] = $data_array2[':email'];  
            header("location:set_session.php");
          
        }

    }

}

    
?>