<?php
    include_once 'admin/register_function.php';
    
    $obj = new Registration();
    if (isset($_POST['login'])) {
        $data_array2 = [
          
          ':email' =>  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING),
          ':password' =>  filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)
          
        ];
        
        
        $obj->Login($data_array2);
      }
?>

<!DOCTYPE html>  
 <html>  
      <head>  
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      </head>  
      <body> 
      <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <input type="submit" name="login" value="login">
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
      </body>  
 </html> 