<?php
  include_once 'admin/register_function.php';
  $registration = new Registration();
  if (isset($_POST['register-btn'])) {
    $data_array = [
      ':first' =>  filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING),
      ':last' =>  filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING),
      ':email' =>  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING),
      ':password' =>  filter_input(INPUT_POST, 'psw', FILTER_SANITIZE_STRING),
      ':password_repeat' =>  filter_input(INPUT_POST, 'psw-repeat', FILTER_SANITIZE_STRING)
    ];
    
    
    $registration->VerifyEmail($data_array);
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/register_folder.css">
</head>
<body>

<form action="" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="psw"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstName" required>

    <label for="psw"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastName" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name="register-btn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>


