<?php
include_once '../db/database.php';
session_start();
    class Registration
    { //connecting to db
        public function __construct()
    {
        $this->db = new db();
        $this->db = $this->db->connect();
    }
     //verify the email
    public function VerifyEmail($data_array) {
        $stmt = $this->db->prepare("SELECT email FROM users WHERE email = :email");
        $stmt->bindValue(':email', $data_array[':email'], PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo "Choose othe email";
        } else { //if the email is valid than insert to database
            $stmt = $this->db->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)");
            $HashedPass = hash('sha512', $data_array[':password']);
            $stmt->bindValue(':firstname', $data_array[':first'], PDO::PARAM_STR);
            $stmt->bindValue(':lastname', $data_array[':last'], PDO::PARAM_STR);
            $stmt->bindValue(':email', $data_array[':email'], PDO::PARAM_STR);

            $stmt->bindValue(':password', $HashedPass, PDO::PARAM_STR);
            if ($stmt->execute()) {
                header('location: login.php');
                    echo ('registered');
            }
            
            
        }
    }
//easy login setting a session on the Email
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
//login for Admin to get access to the CRUD
    public function AdminLogin($data_array2) {
        $stmt = $this->db->prepare("SELECT email, password FROM admin WHERE email = :email AND password = :password");
        $stmt->bindValue(':email', $data_array2[':email'], PDO::PARAM_STR);
        $stmt->bindValue(':password', $data_array2[':password'], PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            $_SESSION['admin'] = $data_array2[':email'];
            echo ('success');
            echo '<a href="CRUD/index.php">CRUD</a>';
           
        }
    }
    

}

    
?>