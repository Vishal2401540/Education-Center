<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Sign out</title>
    <style>
        #Container-sec1{
            margin: auto;
         
            height: 7s00px;
            text-align: center;
        }
        .form-control{
           
            display: inline-block;
        }

    </style>
  
  </head>
  <body>
     
      <?php 
         if ($_SERVER['REQUEST_METHOD']=='POST'){
            $name =$_POST['name'];
            $name2 =$_POST['name2'];
            $Address =$_POST['address'];
            $Address2 =$_POST['address2'];
            $City =$_POST['City'];
            $State =$_POST['State'];
            $Zip =$_POST['Zip'];
            echo ' <div class="alert alert-success alert-warning alert-dismissible fade show" role="alert">
            <strong>Success</strong>    Your Name :- '.$name.$name2.' <br>Your Full Address :- ' .$Address.'<br> Your home landmark :-'.$Address2.'<br> Your State ,City and PinCode is :-'.$State.$City.$Zip.  'has been submitted
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times</span>
            </button>  
            </div>'
             ;
           }

             
      ?>
      <
      <div class="container" id="Container-sec1">
         
              <h2>Create a new  Account</h2>
              <p>Its quick and easy.</p>
<form  action="/profile2/project__3/signout.php"  method="POST">
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="name">First name</label>
      <input type="Text" class="form-control" name="name" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="name">Last name</label>
      <input type="text" class="form-control" name="name2" id="inputPassword4">
    </div>
</div>
  <div class="form-group">
      <label for="Address">Address</label>
      <input type="text" class="form-control" name="address" id="inputAddress" placeholder="Your Address">
  </div>
  <div class="form-group">
      <label for="Address">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Your Address landmark!">
</div>
  <div class="form-row">
      <div class="form-group col-md-6">
          <label for="City">City</label>
      <input type="text" class="form-control" name="City" id="inputCity">
    </div>
    <div class="form-group col-md-4">
        <label for="State">State</label>
        <select id="inputState" name="State" class="form-control">
            <option selected>Choose up</option>
        <option>Uttar Pradesh</option>
      </select>
    </div>
    <div class="form-group col-md-2">
        <label for="Zip">Zip</label>
      <input type="text"  name ="Zip" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
      <!-- <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
        </div> -->
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>