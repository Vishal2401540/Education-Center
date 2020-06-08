
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Login</title>
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
     require 'partial/nav.php';
  ?>
    
    <?php
        $login =false;
        $showError=false;
        if ($_SERVER['REQUEST_METHOD']=='POST'){
          require 'partial/_dpconnect.php';
          $Username =$_POST['Username'];
          $password =$_POST['pass'];
        
                  

          // $sql=" Select * from sign_out_3 WHERE Username = '$Username' AND password= '$password'";
          $sql=" Select * from sign_out_3 WHERE Username = '$Username'";
          
          $result = mysqli_query($conn ,$sql);
        
          $num =mysqli_num_rows($result);

           if($num==1){
             while($row= mysqli_fetch_assoc($result)){
               if(password_verify($password , $row['Password' /*jo password database mai use kiya bahi yeaha per likha jaayega*/])){
                  $login=true;
             
                  session_start();
                  $_SESSION['loggedin']='true';
                  $_SESSION['Username']= $Username;
                  header("location: project5/index.php");
                } else{
                  $showError ="Invalid password";
                }
              }
            }
        
          else{
            $showError ="Invalid password";
          }
        }
        

       
          
    ?>
    <?php
    if($login){
     echo ' <div class="alert alert-success  alert-dismissible fade show" role="alert">
     <strong>Success</strong>   Login is successfully
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
    <h2 class="h2 text-center">Log_in on your Website</h2>
     <p class="p text-center">thanku for log_in  page</p>
    <form action="/profile2/project__3/login.php"  method="POST">
  <div class="form-group">
    <label for="Username">Username</label>
    <input type="text" class="form-control" name="Username" id="Username" aria-describedby="emailHelp">
    <small id="Username" class="form-text text-muted">Your enter full name</small>
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" name="pass" id="Password1">
  </div>
 
  
  <button type="submit" class="btn1 btn-primary">Log_in</button>
</form>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>