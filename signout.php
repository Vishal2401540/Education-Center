<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Sign_in</title>
    <style>
      body{
        background: radial-gradient(circle, #009cde ,#003087);
      }
      .container{
        margin-top: 50px;
      }
      .btn1{
        width: 100%;
     
      }
    </style>
  </head>
  
  <body>
    <?php
       require 'partial/nav.php'
    ?>
    <?php
        require 'partial/_dpconnect.php'
    ?>
    <?php
     $showError=false;
        $showAlert =false;
        if ($_SERVER['REQUEST_METHOD']=='POST'){
          $Username =$_POST['Username'];
          $password =$_POST['pass'];
          $Cpassword =$_POST['Cpass'];
    
         $existSql ="SELECT * FROM `sign_out_3` WHERE Username='$Username'";
         $result = mysqli_query($conn ,$existSql);
         $numExistRows= mysqli_num_rows($result);
         if($numExistRows>0){
          $showError ="username already exists";
         }
         else{
          
          if($password==$Cpassword){
           $hash = password_hash($password , PASSWORD_DEFAULT);   

          $sql="INSERT INTO `sign_out_3` (`S/N`, `Username`, `Password`, `Date`) VALUES (NULL, '$Username', '$hash', current_timestamp())";
          $result = mysqli_query($conn ,$sql);
           if($result){
                  $showAlert=true;
                }
          }
        
          else{
            $showError ="Password do not match ";
          }
        }
      }
        $sql="CREATE TABLE `user2402`.`sign_out_3` ( `S/N` INT(11) NOT NULL AUTO_INCREMENT , `Username` VARCHAR(20) NOT NULL , `Password` VARCHAR(20) NOT NULL , `Date` DATETIME(6) NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`S/N`)) ";
        $result = mysqli_query($conn ,$sql);
          
    ?>
    <?php
    if($showAlert){
     echo ' <div class="alert alert-success  alert-dismissible fade show" role="alert">
     <strong>Success</strong>    Your account is create in data base
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times</span>
     </button>  
     </div>'
      ;
    }
    ?>
    <?php
    if($showError){
      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong></strong>    Login is not successfully beasuse :-'.$showError.' 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
      </button>  
      </div>'
       ;
    }
    ?>
    <div class="container">
    <h2 class="h2 text-center">Sign_in on your Website</h2>
     <p class="p text-center">thanku for sign_in welcome page</p>
    <form action="/profile2/project__3/signout.php"  method="POST">
  <div class="form-group">
    <label for="Username">Username</label>
    <input type="text" class="form-control" name="Username" id="Username" aria-describedby="emailHelp">
    <small id="Username" class="form-text text-muted">Your enter full name</small>
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" name="pass" id="Password1">
  </div>
  <div class="form-group">
    <label for="CPassword"> Conform Password</label>
    <input type="password" class="form-control" name="Cpass" id="Password2">
  </div>
  
  
  <button type="submit" class="btn1 btn-primary">Submit</button>
</form>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>