<?php
session_start();
error_reporting("");
$conn=new PDO("mysql:host=localhost;dbname=buddha_digital;","root","");
?>
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
     <!-- <link rel="stylesheet" type="text/css" href="mycss.css"> -->
          <link rel="stylesheet" type="text/css" href="owl.carousel.min.css">

    <title>Budhha Digital</title>
  </head>
  <body>





<nav class="navbar navbar-expand-lg navbar-light bg-dark  fixed-top">
  <a class="navbar-brand text-white"  href="index.php">
  <img src="images/logo.jpg" height="75" width="75" class="rounded-circle">
  Buddha Digital</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="course.php">course</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="contect.php">contect</a>
      </li>
      <li class="nav-item dropdown text-white">
        <a class=" text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

<?php
if(isset($_SESSION['uname2'])){
$currentuser=$_SESSION['uname2'];
}
if(isset($_SESSION['uname'])){
$currentuser=$_SESSION['uname'];
}
if($currentuser){ ?>
      <li class="nav-item " id="dashbord">
        <a class="nav-link  text-white" href="dashbord.php">dashbord</a>
      </li>
<?php
}
      ?>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      <a href="register.php" type="button" class="btn btn-sm btn-danger ml-1 " id="dashbord2" ><abbr title="create account"><i class="fas fa-user-plus"></i></abbr></a>

    </form>
</nav>