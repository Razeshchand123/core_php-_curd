<?php

if(isset($_GET['msg'])){
  echo "<p class='text-center text-danger'>".$_GET['msg']."</p>";
 
  ?>
  <div class="text-center ">
  <img src='images/wrongmsg.jpg' class='img-fluid text-center ' style="height:20px;width:20px;">
</div>
<?php } ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="mycss.css">
<script src="https://kit.fontawesome.com/a8a1b7735d.js" crossorigin="anonymous"></script>
    <title>my blog</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>Budhha Digital</title>
  
  </head>
  <body>


<div class="container-fluid text-center  wrap1" >
  <div class="row w-100 d-flex flex-column">
    <a href="register.php"class="mb-2">login</a>
    <h6><i>OR</i></h6>
    <h5>create new account</h5>

    <div class="col-md-6 m-auto">
    <form action="control.php" method="post" enctype="multipart/form-data" class="form-group myshadow">
      <input type="text" name="user_name" class="form-control" placeholder="set user name">
      <input type="text" name="user_password" class="form-control" placeholder="set password">
      <input type="text" name="address" class="form-control" placeholder="address">

<br>
     
male <input type="radio" name="gender" value="male" class="text-left">  


female <input type="radio" name="gender" value="female" >
<br><br>
<input type="file" name="pic" class="form-control">
<p class="text-left">choose your profile pic</p>
<br>
<br>


      <input type="submit" name="signupsubmit" value="create" class="btn btn-success btn-block mt-2">
   
    </form>
  </div>
  </div>
</div>



<style>
   .myshadow{box-shadow:3px 2px 6px 4px darkseagreen;}
</style>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>