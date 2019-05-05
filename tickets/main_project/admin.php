<?php
session_start();
if (isset($_SESSION['email'])) {
    echo ('you are not admin');
    echo '<a href="../main_project/index.php">HOME</a>';
} else {
    echo ('You have to log in');
    echo '<a href="../main_project/login.php">HOME</a>';
}

if (isset($_SESSION['admin'])) {
    include_once 'CRUD/index.php';
} else {
    echo ('You have to log in');
    echo '<a href="../main_project/login.php">HOME</a>';
}

?>