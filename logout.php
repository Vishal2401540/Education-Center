<?php
    session_start();
    session_unset();
    session_destroy();
      header ("location:login.php");
      exit;
    
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>LogOut</title>
  </head>
  <body>
      <?php  require 'partial./nav.php'?>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse odit, praesentium fugit commodi necessitatibus voluptas rerum, omnis magni cumque ea quis earum nesciunt ab tempore temporibus eligendi aperiam? Quae deleniti, deserunt quo commodi culpa laborum ab debitis sint accusamus. Reiciendis hic amet a enim atque dolores nisi delectus corrupti fuga suscipit! Rem, esse quas. Optio, soluta illum eligendi eveniet officia itaque quae voluptate nam sit quo voluptates, quidem nesciunt ut inventore amet neque rerum minima, modi ipsum. Reiciendis minus odit ex placeat perspiciatis possimus voluptates eaque. Impedit esse, delectus eos expedita non adipisci eligendi quasi rerum nam ex debitis quaerat sunt saepe nemo repellendus cumque quo tempore consectetur amet, dicta, tenetur ipsum quia. Iure autem doloremque sit distinctio dolores atque quam, eligendi porro. Nobis rerum ipsum cum blanditiis voluptates ratione, cupiditate, numquam illo temporibus perferendis molestiae cumque quo impedit deserunt iste excepturi laborum accusantium sed et fugiat quam! Maiores animi illum delectus inventore ex quis ea, mollitia, nulla ut ad perferendis? Non ab quam dolorem libero cum ratione illo adipisci, ad magnam eius minus hic esse fugiat odit laborum, recusandae quidem ea odio sint ipsam dolore molestiae omnis perspiciatis! Voluptatem possimus eos repudiandae. Reiciendis possimus quasi a, commodi facere odit.</p>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>